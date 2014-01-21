<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\DoctypePrefixCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

abstract class DoctypePrefixCaseTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {            
            $doctypeCollection[$key] = str_replace('<!DOCTYPE', '<!' . $this->getDoctypePrefixReplacement(), $value);
        }
        
        return $doctypeCollection;
    }
    
    abstract protected function getDoctypePrefixReplacement();   
    
}