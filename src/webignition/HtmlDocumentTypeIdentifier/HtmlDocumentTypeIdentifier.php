<?php
namespace webignition\HtmlDocumentTypeIdentifier;

/**
 * 
 */
class HtmlDocumentTypeIdentifier {
    
    const DOCTYPE_LINE_PATTERN = '/^<!doctype\s+(html)/i';
    const XML_DECLARATION_LINE_PATTERN = '/^<\?xml\s+/i';
    const COMMENT_LINE_PATTERN = '/^<!--/i';
    
    private $publicIdToSystemIdMap = array(
        '-//W3C//DTD HTML 4.01//EN' => 'http://www.w3.org/TR/html4/strict.dtd',
        '-//W3C//DTD HTML 4.01 Transitional//EN' => 'http://www.w3.org/TR/html4/loose.dtd',
        '-//W3C//DTD HTML 4.01 Frameset//EN' => 'http://www.w3.org/TR/html4/frameset.dtd',
        '-//W3C//DTD XHTML 1.0 Strict//EN' => 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd',
        '-//W3C//DTD XHTML 1.0 Transitional//EN' => 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd',
        '-//W3C//DTD XHTML 1.0 Frameset//EN' => 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd',
        '-//W3C//DTD XHTML 1.1//EN' => 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd',
        '-//W3C//DTD XHTML Basic 1.1//EN' => 'http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd',
        '-//IETF//DTD HTML 2.0//EN' => '',
        '-//W3C//DTD HTML 3.2 Final//EN' => '',
        '-//W3C//DTD XHTML Basic 1.0//EN' => 'http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd',
        '-//W3C//DTD XHTML+RDFa 1.0//EN' => 'http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd',
    );
    
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
        
        return isset($this->publicIdToSystemIdMap[$this->documentTypeObject->publicId]);
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
    
}