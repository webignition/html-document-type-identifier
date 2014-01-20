<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class SingleLineTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->singleline()->getAllKnown();
    }
    
}