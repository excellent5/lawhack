<?php
/**
 * Created by PhpStorm.
 * User: zhanyang
 * Date: 15/10/24
 * Time: 下午4:13
 */
$documenttype = $_POST['documenttype'];
$estatetype = $_POST['estatetype'];
$location = $_POST['location'];
$ifloaner = $_POST['ifloaner'];

$data = array("Just try it", "OK");
header('Content-Type: application/json');
echo json_encode($data);