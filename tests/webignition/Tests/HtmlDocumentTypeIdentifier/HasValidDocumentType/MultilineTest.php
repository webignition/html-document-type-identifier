<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class MultilineTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->multiline()->getAllKnown();
    }
    
}