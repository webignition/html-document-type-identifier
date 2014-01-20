<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class LowercasePrefixTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->lowercasePrefix()->getAllKnown();
    }
    
}