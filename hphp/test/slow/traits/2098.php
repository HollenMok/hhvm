<?php

define('INIT1', 123);
trait t1 {
}
class c {
 use t1;
 static public $x = INIT1;
 }
var_dump(c::$x);
