<?php 
include_once("../Model/Account.php");
class LogOut{
    public function log_out()
    {
        $account = new Account();
        $account->logOut();
    }
}
$log_out = new LogOut();
$log_out->log_out();
?>