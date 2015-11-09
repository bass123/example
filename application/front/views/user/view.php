<div id="container" class="left">
    <div class="row">
	<div class="col-md-push-1 col-md-10">
        <h1>My profile</h1>
<?php
	if(empty($userpictures)){
	    echo "<h2> Потребителят няма качени снимки към този момент ! </h2>";
	} else {
	    echo "<h2> Листинг на всички качени снимки от потребителя </h2>"; 	
	?>
	
	<div class="row thumbnail">
	    <div class="col-md-push-1 col-md-10">
		<div class="row">
<?php
	    foreach ($userpictures as $row){
?>
		    <div class="col-xs-4 col-md-2">
			<a href="<?php echo $this->buildLink('picture/view/'.$row['pic_id']); ?>" class="thumbnail">
			<img src="<?php echo $this->path_template ."/pictures/". $row['name']?>" alt="...">
		    </a>
		  </div>    
<?php
	    }
	
	
	
	?>
        	</div>
	    </div>
	    </div>
	<?php } ?>
	</div>
    </div>
    <div class="row">
	<div class="col-md-push-1 col-md-10 thumbnail">
	    <h4> Profile information</h4><hr>
	    <!-- Table -->
			<table class="table">
			    <tr><td>Name</td> <td><?php echo $user['name']; ?></td></tr>
			    <tr><td>Surname</td> <td><?php echo $user['surname']; ?></td></tr>
			    <tr><td>Lastname</td> <td><?php echo $user['lastname']; ?></td></tr>
			    <tr><td>user_name</td> <td><?php echo $user['user_name']; ?></td></tr>
			    <tr><td>email</td> <td><?php echo $user['email_address']; ?></td></tr>
			</table>
	</div>
    </div>
</div>