--TEST--
Bug #46215 (jsond_encode mutates its parameter and has some class-specific state)
--SKIPIF--
<?php
if (!extension_loaded("jsond")) {
 	die('skip JSON extension not available in this build');
}	 
?>
--FILE--
<?php

class foo {
    protected $a = array();
}

$a = new foo;
$x = jsond_encode($a);

print_r($a);

?>
--EXPECT--
foo Object
(
    [a:protected] => Array
        (
        )

)
