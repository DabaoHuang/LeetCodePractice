<?php 

/**
 * Dependency Injection
 */

class TestClass { }

$rc = new ReflectionClass('TestClass');
var_dump($rc->getDocComment());