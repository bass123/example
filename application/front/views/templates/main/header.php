<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sample Picture Upload</title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->path_template;?>css/bootstrap.min.css" rel="stylesheet">    
    <section>
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo $this->buildLink('home'); ?>">My sample Picture uploader</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
			<li><a href="<?php echo $this->buildLink('home');?>">Home </a></li>
			<li><a href="<?php echo $this->buildLink('pictures');?>">Pictures</a></li>
			<li><a href="<?php echo $this->buildLink('users');?>">Users</a></li>
			<li><a href="<?php echo $this->buildLink('contacts');?>">Contacts</a></li>
<?php
	if(!empty($_SESSION['user'])) {    
?>
		    <ul class="nav navbar-nav navbar-right">
		    <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Добре дошъл <?php echo $_SESSION['username'];?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
			    <li><a><h3><?php echo $_SESSION['name'] . ' ' . $_SESSION['lastname'];?></h3></a></li>
			    <li><a href="<?php echo $this->buildLink('profile/view');?>">my profile</a></li>
			    <li><a href="<?php echo $this->buildLink('picture/upload');?>"> Upload Picture </a></li>
<?php
    if( $_SESSION['user_type'] == '0'){
?>
			   <li><a href="<?php echo $this->buildLink('admin/home/index');?>">Admin panel</a></li>
<?php
    }
?>
			    
			    <li><a href="<?php echo $this->buildLink('home/logout');?>">logout</a></li>
			</ul>
		    </li>
		    </ul>
	
<?php
	}
?>
	
		    </ul>
		</div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	     </nav>
	</section>
    </head>
<body>