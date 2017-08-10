<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<style type="text/css">
	body {
	  background-color:#fff;
	  -webkit-font-smoothing: antialiased;
	  font: normal 14px Roboto,arial,sans-serif;
	}

	.container {
	    padding: 25px;
	    /*position: fixed;*/
			margin: auto;
	}

	.form-login {
	    background-color: #EDEDED;
	    padding-top: 10px;
	    padding-bottom: 20px;
	    padding-left: 20px;
	    padding-right: 20px;
	    border-radius: 15px;
	    border-color:#d2d2d2;
	    border-width: 5px;
	    box-shadow:0 1px 0 #cfcfcf;
	}

	h4 {
	 border:0 solid #fff;
	 border-bottom-width:1px;
	 padding-bottom:10px;
	 text-align: center;
	}

	.form-control {
	    border-radius: 10px;
	}

	.wrapper {
	    text-align: center;
	}

	</style>
</head>
<body>

	<div class="container">
	    <div class="row">
	        <div class="col-md-offset-5 col-md-3">
	            <div class="form-login">
	            <h4>Welcome back.</h4>
							<form action="" method="post">
								<div class="form-group">
                  <div class="input-group">
										<span class="input-group-addon">
		                    <i class="glyphicon glyphicon-user" style="width: auto"></i>
		                </span>
										<!-- <label>Account:</label> -->
										<input type="text" class="form-control input-sm chat-input" name="account" /><br>
				            </br>
									</div>
								</div>
								<div class="form-group">
                  <div class="input-group">
										<span class="input-group-addon">
		                    <i class="glyphicon glyphicon-lock" style="width: auto"></i>
		                </span>
										<!-- <label>Password:</label> -->
										<input type="password" class="form-control input-sm chat-input" name="password" /><br>
				            </br>
									</div>
								</div>
		            <div class="wrapper">
			            <span class="input-group">
										 <!-- <i class="glyphicon glyphicon-log-in" style="width: auto"></i> -->
			                <!-- <a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
			            </span>
									<input type="submit" class="btn btn-primary btn-md" value="Login" name="submit">
	            	</div>
							</form>
	            </div>

	        </div>
	    </div>
	</div>
	<br>
	<br>
</body>
</html>
