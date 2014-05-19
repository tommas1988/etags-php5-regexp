<?php
include 'TestClass.php';

use EtagsPHPEnhancement\TestClass;

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