<?php
include "./common.php";

$json = json_encode(array('data' => ID_CHECK($_GET)));

echo ($json);
