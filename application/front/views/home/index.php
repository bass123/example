<div id="content" class="left">
<?php
    if(empty($_SESSION['user'])){
?>
    <div class="row">
	<div class="col-md-push-1 col-md-4">
        <h1>Please log on ..</h1>

	<form class="form-horizontal" method="POST" action="<?php echo $this->buildLink('home/login');?>">
	    <div class="form-group">
	      <label for="inputUsername" class="col-sm-2 control-label">User name: </label>
	      <div class="col-sm-10">
		<input type="text" class="form-control" name="user_name" placeholder="User name">
	      </div>
	    </div>
	    <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control" name="password" placeholder="Password">
		</div>
	    </div>
	 
	    <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		    <button type="submit" name="Action" class="btn btn-default">Sign in</button>
		</div>
	    </div>
	</form>
	</div>
    <div class="col-md-push-1 col-md-4">
        <h1>or Sign Up ..</h1>

	<form class="form-horizontal" method="POST" action = "<?php echo $this->buildLink('home/registrate');?>">
	    <div class="form-group">
	      <label for="inputName" class="col-sm-2 control-label">Name</label>
	      <div class="col-sm-10">
		<input type="text" name="User[name]" value="<?php echo $_POST['User']['name']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputSurname" class="col-sm-2 control-label">Surname</label>
	      <div class="col-sm-10">
		<input type="text" name="User[surname]" value="<?php echo $_POST['User']['surname']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputLastname" class="col-sm-2 control-label">Lastname</label>
	      <div class="col-sm-10">
		<input type="text" name="User[lastname]" value="<?php echo $_POST['User']['lastname']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputLastname" class="col-sm-2 control-label">User name</label>
	      <div class="col-sm-10">
		<input type="text" name="User[user_name]" value="<?php echo $_POST['User']['user_name']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="text" name="Password[first]" value="<?php echo $_POST['User']['password']; ?>">
		</div>
	    </div>
	    
	    <div class="form-group">
		<label for="inputPassword2" class="col-sm-2 control-label">Repair Password</label>
		<div class="col-sm-10">
		  <input type="text" name="Password[second]" value="<?php echo $_POST['User']['password']; ?>">
		</div>
	    </div>
	 
	    <div class="form-group">
	      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
	      <div class="col-sm-10">
		<input type="text" name="User[email_address]" value="<?php echo $_POST['User']['email_address']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" name="Action" value="Submit"> 
		</div>
	    </div>
	</form>
	</div>
	<?php
    } 
	?>
    <div class="row">
	    <div class="col-md-push-1 col-md-10">
		<table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>view</th>
                </tr>
<?php
        foreach ($pictures as $row) {
?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="<?php echo $this->buildLink('picture/view/' . $row['ID']); ?>"> View </a></td>
                </tr>
<?php
        }
?>
		
            </table>
	    </div>   
	</div> 
</div>
