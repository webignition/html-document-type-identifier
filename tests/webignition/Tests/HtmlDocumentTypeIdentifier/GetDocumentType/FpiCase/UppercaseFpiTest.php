<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class UppercaseFpiTest extends GetDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->uppercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->uppercaseFpi()->getAllKnown());
    } 
}