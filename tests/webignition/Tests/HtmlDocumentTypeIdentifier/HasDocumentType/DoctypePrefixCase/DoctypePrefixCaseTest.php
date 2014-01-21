<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\DoctypePrefixCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

abstract class DoctypePrefixCaseTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {            
            $doctypeCollection[$key] = str_replace('<!DOCTYPE', '<!' . $this->getDoctypePrefixReplacement(), $value);
        }
        
        return $doctypeCollection;
    }
    
    abstract protected function getDoctypePrefixReplacement();   
    
}