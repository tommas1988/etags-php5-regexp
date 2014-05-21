<?php
namespace EtagsPHPEnhancement;

interface TestInterface
{
}

abstract class AbstractTestClass
{
    abstract public function testMethod();
    abstract public function testProperty();
}

class TestClass extends AbstractTestClass
{
    const TEST_CONST = 'test constant';

    public    $publicProperty;
    protected $protectedProperty;
    private   $privateProperty;

    public static    $publicStaticProperty;
    protected static $protectedStaticProperty;
    private static   $privateStaticProperty;

    public function testProperty()
    {
        $this->publicProperty = 'tested';
        $this->protectedProperty = 'tested';
        $this->privateProperty = 'tested';
    }

    public static function testStaticProperty()
    {
        self::$publicStaticProperty = 'tested';
        self::$protectedStaticProperty = 'tested';
        self::$privateStaticProperty = 'tested';
    }

    public function testMethod()
    {
        $this->publicMethod();
        $this->protectedMethod();
        $this->privateMethod();
    }

    public static function testStaticMethod()
    {
        self::publicStaticMethod();
        self::protectedStaticMethod();
        self::privateStaticMethod();
    }

    public function publicMethod()
    {
        // public method
    }

    protected function protectedMethod()
    {
        // protected method
    }

    private function privateMethod()
    {
        // private method
    }

    public static function publicStaticMethod()
    {
        // public static method
    }

    protected static function protectedStaticMethod()
    {
        // protected static method
    }

    private static function privateStaticMethod()
    {
        // private static method
    }
}

final class TestFinalClass
{
    final public function test()
    {
        //
    }
}