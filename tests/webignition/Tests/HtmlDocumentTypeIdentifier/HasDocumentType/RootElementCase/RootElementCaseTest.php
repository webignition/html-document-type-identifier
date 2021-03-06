<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\RootElementCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

abstract class RootElementCaseTest extends HasDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {                                    
            $doctypeCollection[$key] = preg_replace('/<!doctype html/i', '<!DOCTYPE ' . $this->getRootElementReplacement(), $value);
        }
        
        return $doctypeCollection;
    }
    
    abstract protected function getRootElementReplacement();
    
}