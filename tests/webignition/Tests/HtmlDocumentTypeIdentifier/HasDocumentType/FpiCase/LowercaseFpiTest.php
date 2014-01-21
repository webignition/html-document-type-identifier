<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

class LowercaseFpiCaseTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->lowercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->lowercaseFpi()->getAllKnown());
    }    
    
}