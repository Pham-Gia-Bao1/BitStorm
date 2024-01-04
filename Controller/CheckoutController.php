<?php
include_once("../Model/CheckoutModel.php");
include_once("../Model/AccountModel.php");
$DetailExpertModel = new Checkout();
$id = $_GET['expert_id'];
$dataExpert = $DetailExpertModel->getExpert($id);
?>
<?php include("../View/Checkout/CheckoutView.php"); ?>
