<?php
include("../Model/AboutModel.php");
include_once("../Model/AccountModel.php");
$expert = new About();
$experts = $expert->showExpert();
include("../View/AboutUs/AboutView.php");
