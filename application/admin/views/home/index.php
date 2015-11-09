<?php
    if(!empty($_SESSION['user'] && $_SESSION['user_type']==0)){
?>
	
	<div class="row">
	    <div class="col-md-push-1 col-md-10">
		<div class="panel panel-default">
		    <div class="panel-heading">List of last 5 registrate users</div>
			<table class="table table-bordered">
			<tr>
			    <th>#</th>
			    <th>Name</th>
			    <th>Surname</th>
			    <th>Lastname</th>
			    <th>user_name</th>
			    <th>email_address</th>
			    <th>view</th>
			</tr>
<?php
        foreach ($users as $row) {
?>
			<tr>
			    <td><?php echo $row['ID']; ?></td>
			    <td><?php echo $row['name']; ?></td>
			    <td><?php echo $row['surname']; ?></td>
			    <td><?php echo $row['lastname']; ?></td>
			    <td><?php echo $row['user_name']; ?></td>
			    <td><?php echo $row['email_address']; ?></td>
			    <td><a href="<?php echo $this->buildLink('../user/view/' . $row['ID']); ?>"> View </a></td>
			</tr> 
<?php
	}
?>
		    </table>
		</div>   
	    </div> 
	</div>

    <div class="row">
	<div class="col-md-push-1 col-md-10">
	    <div class="panel panel-default">
		<div class="panel-heading">List of last 5 pics</div>
		    <table class="table table-bordered">
		    <tr>
			<th>#</th>
			<th>Name</th>
			<th>Date</th>
			<th>view</th>
		    </tr>
<?php
        foreach ($pictures as $row) {
?>
	    <tr>
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><a href="<?php echo $this->buildLink('../picture/view/' . $row['ID']); ?>"> View </a></td>
	    </tr>
<?php
        }
?>
		 </table>
	    </div>
<?php	
    if($pictures['Pages']>1){
?>
	    <nav>
		 <ul class="pagination">
<?php	
for ($i = 1; $i <= $pictures["Pages"]; $i++) {
?>
		    <li><a href="<?php echo $this->buildLink('pictures/?page=' . $i) ?>"><?php echo $i; ?></a></li>
<?php
}
?>
		</ul>
	    </nav>
<?php
    }
?>
	</div>  
    </div> 
</div>



<?php 
    } else {
	$this->redirect($this->buildLink('front/home/index'));
    }