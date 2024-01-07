<?php
require ("../Controller/Database/database.php");
include_once("../Model/AccountModel.php");
include_once("../Model/AdminNewsModel.php");
$newAdmin = new AdminNews();
$news=$newAdmin->selectNews();
?>