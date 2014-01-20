<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class WithoutUriTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->noUri()->getAllKnown();
    }
    
}