<?php
include 'TestClass.php';

use EtagsPHPEnhancement\TestClass;
use EtagsPHPEnhancement\TestFinalClass;

$obj = new TestClass();

// test property
$obj->testProperty();
// test method
$obj->testMethod();


// test constant
echo TestClass::TEST_CONST;

// test static property
TestClass::testStaticProperty();
// test static method
TestClass::testStaticMethod();

$obj = new TestFinalClass();
$obj->test();