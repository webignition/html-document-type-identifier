<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class UppercasePrefixTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->uppercasePrefix()->getAllKnown();
    }
    
}