<?php

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;

/**
 * Formal doctype format is:
 * <!DOCTYPE root-element PUBLIC "FPI" ["URI"] [ 
 * <!-- internal subset declarations -->
 * ]>
 * 
 * The URL is optional, making the following two examples valid:
 * <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 * <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 * 
 * This test ensures that the former is considered valid. A bug was found where it was not considered valid.
 */
class MissingUriTest extends BaseTest {
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
    }       
    
    public function testHtml401Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401transitional-missing-uri.html'));        
        
        $this->assertTrue($identifier->hasValidDocumentType());
        $this->assertTrue($identifier->hasDocumentType());        
    }
}