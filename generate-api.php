<?php
require './vendor/autoload.php';
//$xsdFile = './example/openimmo_127b.xsd';
$xsdFile = './example/openimmo-feedback_125.xsd';

$apiGenerator = new \Ujamii\OpenImmo\Generator\ApiGenerator();
$apiGenerator->generateApiClasses($xsdFile);