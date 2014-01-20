<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class UppercasePrefixTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->uppercasePrefix()->getAllKnown();
    }
    
}