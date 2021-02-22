<!DOCTYPE html>
<html>
<head>
<title>phpmyMultiLangCodeIgnitor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="<?php echo site_url()."home/index"?>"><?php echo lang('site_name');?></a>
		    </div>
		    <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo lang('change_language');?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href='<?php echo site_url()?>langswitch/switchLanguage/english'><?php echo lang('english');?></a></li>
                  <li><a href='<?php echo site_url()?>langswitch/switchLanguage/urdu'><?php echo lang('urdu');?></a></li>
				  <li><a href='<?php echo site_url()?>langswitch/switchLanguage/hindi'><?php echo lang('hindi');?></a></li>
                </ul>
              </li>
		    </ul>
		  </div>
		</nav>
	<div class="container">