<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getConnection() {
    $user = "root";
    $password = "";
    $host = "localhost";
    $conn = mysql_connect($host, $user, $password) or die("Connect Failed");
    mysql_query("SET NAMES 'utf8'");
}
