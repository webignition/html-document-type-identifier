<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class NoSpaceBetweenFpiAndUriTest extends HasValidDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {
            $doctypeCollection[$key] = str_replace('" "', '""', $value);
        }
        
        return $doctypeCollection;
    }   
}