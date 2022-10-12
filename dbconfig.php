<?php
$dPconfig['dbtype'] = 'mysql';
$dPconfig['querytype'] = 'mysql';
$dPconfig['dbhost'] = '172.18.32.1';
$dPconfig['dbname'] = 'mysql';
$dPconfig['dbuser'] = 'shin';
$dPconfig['dbpass'] = 'tls6007';

$db_host = $dPconfig['dbhost'];
$db_user = $dPconfig['dbuser'];
$db_pass = $dPconfig['dbpass'];
$db_name = $dPconfig['dbname'];

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

mysqli_query($con, "set names utf8");
