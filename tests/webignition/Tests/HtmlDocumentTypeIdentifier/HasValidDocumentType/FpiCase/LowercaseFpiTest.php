<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

class LowercaseFpiCaseTest extends HasValidDocumentTypeTest {   
    
    public function setUp() {
        parent::setUp();        
        $this->expectedResult = (in_array($this->getName(), array(
            'testHtml_5',
            'testHtml_5_Legacy_Compat'
        )));
    }
    
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->lowercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->lowercaseFpi()->getAllKnown());
    }   
    
}