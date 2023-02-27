<?php
$pageId = "login";
$pageTitle="Login || Gujarat Pro";
$headerData = '<link rel="stylesheet" href="/css/index.css">';
$headerData = '<link rel="stylesheet" href="/css/responsive.css">';
require_once 'inc/header.php';
?>

<style>
    header {
        display: none;
    }
</style>

<section>
    <div class="cont-login">
        <div class="main-login">
            <h2>Login to Gujarat Pro</h2>
            <h3>Login to continue enjoying uninterrupted video and personalised experience.</h3>
            <div class="social-icon-login">
                <div class="googlelogin-icon ">
                    <a href="">
                        <img src="assets/img/google-social-icon-circle.svg" alt="">
                    </a>
                </div>
                <div class="fbicon-icon ">
                    <a href="">
                        <img src="assets/img/fb-social-icon-circle.svg" alt="">
                    </a>
                </div>
                <div class="twicon-icon ">
                    <a href="">
                        <img src="assets/img/twitter-social-icon.svg" alt="">
                    </a>
                </div>
                <div class="aplelogin-icon ">
                    <a href="">
                        <img src="assets/img/apple-social-icon-circle (1).svg" alt="">
                    </a>
                </div>
            </div>
            <div class="labledesign">
                <div class="oricon-main">
                    <div class="oricon">
                        <span>
                            OR
                        </span>
                    </div>
                </div>
            </div>
            <div class="logintextfield">
                <input type="text" name="userName" class="forminput"id="textField" placeholder="Enter email or mobile number"
                    value="">
            </div>
            <div class="login-bottom">
                <div class="logen-btn">
                    <button disabled  class="buttongradient logininBtn">Login</button>
                </div>
                <div class="registering">
                    <span>New to Gujarat Pro ? <a href="/register.php">Register</a></span>
                </div>
            </div>
        </div>
    </div>
</section>