<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kedai Masshita</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="hgroup">Masshita</div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo base_url().'home' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'home/menu' ?>">Menu</a></li>
                    <li><a href="<?php echo base_url().'home/about' ?>">About</a></li>
                    <li><a href="<?php echo base_url().'home/contact' ?>">Contact</a></li>
                    <li><a href="<?php echo base_url().'home/sign in' ?>">Sign In</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </nav>