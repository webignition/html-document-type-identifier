<?php
namespace webignition\HtmlDocumentTypeIdentifier;

/**
 * 
 */
class HtmlDocumentTypeIdentifier {
    
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
        
        if (isset($this->publicIdToSystemIdMap[$this->documentTypeObject->publicId])) {
            return $this->documentTypeObject->systemId == $this->publicIdToSystemIdMap[$this->documentTypeObject->publicId];
        }
        
        return in_array($this->documentTypeString, $this->nonDtdDocumentTypeStrings);
    }
    
    
    /**
     * 
     * @param string $html
     * @return boolean
     */
    private function hasDoctypeLine($html) {        
        return preg_match('/^<!DOCTYPE\s+(html|HTML)/', $html) > 0;
    }
    
}