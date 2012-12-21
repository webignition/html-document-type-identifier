<?php
namespace webignition\HtmlDocumentTypeIdentifier;

/**
 * 
 */
class HtmlDocumentTypeIdentifier {
    
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
        return false;
    }
    
    
    
}