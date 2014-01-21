<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class LowercaseFpiCaseTest extends GetDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->lowercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->lowercaseFpi()->getAllKnown());
    }    
    
}