<?php
namespace webignition\HtmlDocumentTypeIdentifier;

use webignition\HtmlDocumentType\Generator;

/**
 * 
 */
class HtmlDocumentTypeIdentifier {
    
    const DOCTYPE_LINE_PATTERN = '/^<!doctype\s+(html)/i';
    const XML_DECLARATION_LINE_PATTERN = '/^<\?xml\s+/i';
    const COMMENT_LINE_PATTERN = '/^<!--/i';
    const DOCUMENT_TYPE_STRING_WITH_MISSING_URI_ENDING = ' "">';
    
    private $validFpiList = null;
    
    private $nonDtdDocumentTypeStrings = array(
        '<!DOCTYPE html>'
    );
    
    
    /**
     *
     * @var \DOMDocumentType
     */
    private $documentTypeObject;
    
    
    /**
     *
     * @var string
     */
    private $documentTypeString = '';    
    
    /**
     * 
     * @param string $html
     */
    public function setHtml($html) {                
        if (!$this->hasDoctypeLine($html)) {
            $this->documentTypeObject = null;
            $this->documentTypeString = '';
            return;
        }
        
        $currentLibXmlUseInternalErrors = libxml_use_internal_errors();
        
        libxml_use_internal_errors(true);
        
        $domDocument = new \DOMDocument();        
        $domDocument->loadHTML($html);
        
        libxml_use_internal_errors($currentLibXmlUseInternalErrors);        
        
        $this->documentTypeObject = $domDocument->doctype;        
        $this->documentTypeString = $domDocument->doctype->ownerDocument->saveXml($domDocument->doctype);  
        
        $this->translateDoctypePrefixToUppercase();
        $this->removeSuperfluousMissingUriContent();        
    }
    
    private function removeSuperfluousMissingUriContent() {       
        if ($this->isMissingUriContent()) {
            $this->documentTypeString = preg_replace('/' . self::DOCUMENT_TYPE_STRING_WITH_MISSING_URI_ENDING . '$/i', '>', $this->documentTypeString);
        }
    }
    
    
    /**
     * 
     * @return boolean
     */
    private function isMissingUriContent() {
        return substr($this->documentTypeString, strlen($this->documentTypeString) - strlen(self::DOCUMENT_TYPE_STRING_WITH_MISSING_URI_ENDING)) == self::DOCUMENT_TYPE_STRING_WITH_MISSING_URI_ENDING;
    }
    
    
    private function translateDoctypePrefixToUppercase() {
        $this->documentTypeString = preg_replace('/^\<\!doctype html/i', '<!DOCTYPE html', $this->documentTypeString);
    }
    
    
    /**
     * 
     * @return boolean
     */
    public function hasDocumentType() {
        if (is_null($this->documentTypeObject)) {
            return false;
        }
        
        return $this->documentTypeString != '';
    }
    
    
    /**
     * 
     * @return string
     */
    public function getDocumentTypeString() {
        return $this->documentTypeString;
    }
    
    
    /**
     * 
     * @return boolean
     */
    public function hasValidDocumentType() {        
        if (!$this->documentTypeObject instanceof \DOMDocumentType) {
            return false;
        }
        
        if (strtolower($this->documentTypeObject->name) != 'html') {
            return false;
        }
        
        if (in_array($this->documentTypeString, $this->nonDtdDocumentTypeStrings)) {
            return true;
        }
        
        return in_array($this->documentTypeObject->publicId, $this->getValidFpiList());
    }
    
    
    /**
     * 
     * @param string $html
     * @return boolean
     */
    private function hasDoctypeLine($html) { 
        $html = preg_replace("/^\xef\xbb\xbf/", '', $html); 
        
        $nonBlankLines = $this->getNonBlankLines($html);
        if (count($nonBlankLines) === 0) {
            return false;
        }
        
        if (count($nonBlankLines) === 1) {
            return $this->isDoctypeLine($nonBlankLines[0]);
        }
        
        if ($this->isDoctypeLine($nonBlankLines[0])) {
            return true;
        }
        
        if ($this->isXmlDeclarationLine($nonBlankLines[0]) && $this->isDoctypeLine($nonBlankLines[1])) {
            return true;
        }
        
        if ($this->isCommentLine($nonBlankLines[0]) && $this->isDoctypeLine($nonBlankLines[1])) {
            return true;
        }        
        
        return false;
    }
    

    /**
     * 
     * @param string $line
     * @return boolean
     */    
    private function isDoctypeLine($line) {
        return preg_match(self::DOCTYPE_LINE_PATTERN, $line) > 0;
    }
    
    
    /**
     * 
     * @param string $line
     * @return boolean
     */
    private function isXmlDeclarationLine($line) {                
        return preg_match(self::XML_DECLARATION_LINE_PATTERN, $line) > 0;
    }
    
    
    /**
     * 
     * @param string $line
     * @return boolean
     */
    private function isCommentLine($line) {                
        return preg_match(self::COMMENT_LINE_PATTERN, $line) > 0;
    }
    
    
    
    /**
     * 
     * @param string $html
     * @return array
     */
    private function getNonBlankLines($html) {        
        $lines = explode("\n", $html);
        $nonBlankLines = array();
        
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line !== '') {
                $nonBlankLines[] = $line;
            }
        }
        
        return $nonBlankLines;
    }
    
    
    private function getValidFpiList() {
        if (is_null($this->validFpiList)) {
            $generator = new Generator();
            $this->validFpiList = $generator->getFpis();
        }
        
        return $this->validFpiList;
    }
    
}