<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class LowercasePrefixTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->lowercasePrefix()->getAllKnown();
    }
    
}