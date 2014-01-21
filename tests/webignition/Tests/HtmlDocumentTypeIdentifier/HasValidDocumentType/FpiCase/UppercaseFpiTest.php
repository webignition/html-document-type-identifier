<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\FpiCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

class UppercaseFpiTest extends HasValidDocumentTypeTest {   
    
    public function setUp() {
        parent::setUp();
        $this->expectedResult = (in_array($this->getName(), array(
            'testHtml_2',
            'testHtml_2_Alternative',
            'testHtml_32_Alternative1',
            'testHtml_4_Strict',
            'testHtml_401_Strict',
            'testHtml_5',
            'testHtml_5_Legacy_Compat',
            'testXhtml_11',
            'testXhtml_Aria_1',
            'testXhtml_Aria_1_Alternative',
            'testHtml_Aria_401',
            'testHtml_Iso15445_1',
        )));
    }
    
    protected function getUnderTestDoctypeCollection() {        
        return $this->getGenerator()->uppercaseFpi()->getAllKnown();
    }
    
    protected function getExpectedDoctypeCollection() {
        return $this->getKeyNormalisedDoctypeCollection($this->getGenerator()->uppercaseFpi()->getAllKnown());
    }
}