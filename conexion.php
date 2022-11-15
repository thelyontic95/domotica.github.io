<?php
$hostname = $_ENV['aws-sa-east-1.connect.psdb.cloud'];
$dbName = $_ENV['domotica'];
$username = $_ENV['k0lb516n9itbsd1l75lc'];
$password = $_ENV['pscale_pw_jrGZhfGpTSadJcaAcqxa9c77eQzTa9vniRUDftP41BM'];
$ssl = $_ENV['MYSQL_ATTR_SSL_CA'];

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$mysqli->real_connect($hostname, $username, $password, $dbName, $port);

if ($mysqli->connect_error) {
    echo 'not connected to the database';
} else {
    echo "Connected successfully";
}