<?php
require './vendor/autoload.php';
$xsdFile = './example/openimmo_127b.xsd';

$apiGenerator = new \Ujamii\OpenImmo\Generator\ApiGenerator();
$apiGenerator->generateApiClasses($xsdFile);