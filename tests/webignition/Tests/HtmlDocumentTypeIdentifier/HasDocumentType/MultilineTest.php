<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class MultilineTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->multiline()->getAllKnown();
    }
    
}