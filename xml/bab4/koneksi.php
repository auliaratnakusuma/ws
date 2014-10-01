<?php
//koneksi database
$link = mysql_connect('localhost','root', '')
or die('Could not connect: '. mysq_error());
mysql_select_db('mahasiswa')or die('Could not selet database');
?>