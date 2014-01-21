<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

class UppercaseFpiTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->uppercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->uppercaseFpi()->getAllKnown());
    } 
}