<?php

$data = ["membaca", "menulis", "bernyanyi", "belajar", "memasak", "ngoding"];

header('Content-type:application/json;charset=utf-8');
echo json_encode($data);