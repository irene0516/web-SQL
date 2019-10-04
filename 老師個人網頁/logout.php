<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/12/11
 * Time: 上午 01:04
 */
unset($_SESSION['username']);
echo '<p align="center">登出中....</p>';
echo $_SESSION['username'];
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>