<?php

require_once 'Class1.php';
include 'AnotherClass.php';

$cl1 = new Class1();

$an = new AnotherClass();

$cl1->logMessage();;

$an->execute();

