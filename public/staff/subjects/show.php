<?php

$id = isset($_GET['id']) ? $_GET['id'] : '1';
// Only in PHP > 7.0:
// $id = $_GET['id'] ?? '1';


echo $id;