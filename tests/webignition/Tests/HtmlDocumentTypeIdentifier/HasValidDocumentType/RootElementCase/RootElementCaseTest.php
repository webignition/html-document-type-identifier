<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\RootElementCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

abstract class RootElementCaseTest extends HasValidDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {                                    
            $doctypeCollection[$key] = preg_replace('/<!doctype html/i', '<!DOCTYPE ' . $this->getRootElementReplacement(), $value);
        }
        
        return $doctypeCollection;
    }
    
    abstract protected function getRootElementReplacement();
    
}