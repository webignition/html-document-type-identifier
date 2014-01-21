<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

abstract class HasValidDocumentTypeTest extends BaseTest {        
    
    protected $expectedResult = true;
        
    public function setUp() {
        parent::setUp();        
        $this->getIdentifier()->setHtml($this->getFixtureContent());     
    }
    
    abstract protected function getUnderTestDoctypeCollection();    
    

    public function testHtml_2() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }    
    
    public function testHtml_2_Alternative() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    } 
    
    public function testHtml_32() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_32_Alternative1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_32_Alternative2() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_4_Strict() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
   
    public function testHtml_4_Transitional() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_4_Frameset() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_401_Strict() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_401_Transitional() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_401_Frameset() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_5() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_5_Legacy_Compat() {
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_1_Strict() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }        
    
    public function testXhtml_1_Transitional() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_1_Frameset() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }
    
    public function testXhtml_Basic_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Basic_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Print_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Mobile_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Mobile_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Mobile_12() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Rdfa_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Rdfa_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    } 
    
    public function testXhtml_Aria_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testXhtml_Aria_1_Alternative() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }      
    
    public function testHtml_Aria_401() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_Rdfa_401_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   

    public function testHtml_rdfa_401_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_Rdfalite_401_11() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
    
    public function testHtml_Iso15445_1() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }     

    public function testHtml_Iso15445_1_Alternative() {        
        $this->assertEquals($this->expectedResult, $this->getIdentifier()->hasValidDocumentType());
    }   
}