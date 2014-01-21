<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\RootElementCase;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

abstract class RootElementCaseTest extends GetDocumentTypeTest {   
    
    protected function getUnderTestDoctypeCollection() {        
        $doctypeCollection = $this->getGenerator()->getAllKnown();
        
        foreach ($doctypeCollection as $key => $value) {                                    
            $doctypeCollection[$key] = preg_replace('/<!doctype html/i', '<!DOCTYPE ' . $this->getRootElementReplacement(), $value);
        }
        
        return $doctypeCollection;
    }
    
    abstract protected function getRootElementReplacement();
    
}