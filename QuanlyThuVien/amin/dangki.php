<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './ConnectDB.php';
getConnection();
mysql_selectDB("Demo");
$masv = $_POST['masv'];


$array = $_POST['mh_checkbox'];



for ($index = 0; $index < count($array); $index++) {
    $sql = "Select ',1)";
    mysql_query($sql);
}
//} else {
//    echo "failed";
//}


