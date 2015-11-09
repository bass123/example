<div id="content" class="left">
	<div class="row">
	    <div class="col-md-push-1 col-md-10">
		<table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Lastname</th>
                    <th>user_name</th>
                    <th>email_address</th>
                    <th>view</th>
                </tr>
<?php
        foreach ($users['Rows'] as $row) {
?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><a href="<?php echo $this->buildLink('user/view/' . $row['ID']); ?>"> View </a></td>
                </tr>
<?php
        }
	if($users['Pages']>1){
	    for ($i = 1; $i <= $users["Pages"]; $i++) {
?>
		    <a href="<?php echo $this->buildLink('users/?page=' . $i) ?>"> < <?php echo $i; ?> > </a>
<?php
	    }
	}
?>

		</table>
	    </div>   
	</div> 
</div>
