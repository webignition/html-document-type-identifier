<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class SingleLineTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->singleline()->getAllKnown();
    }
    
}