    <div class="row">
	<div class="col-md-push-2 col-md-8 thumbnail">
	    <h2> Profile information</h2><hr>
	    <form class="form-horizontal" method="POST" action = "<?php echo $this->buildLink('users/update/'.$profile['ID']);?>">
	    <div class="form-group">
	      <label for="inputName" class="col-sm-2 control-label">Name</label>
	      <div class="col-md-10">
		<input type="text" name="User[name]" value="<?php echo $profile['name'] ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputSurname" class="col-sm-2 control-label">Surname</label>
	      <div class="col-md-10">
		<input type="text" name="User[surname]" value="<?php echo $profile['surname']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputLastname" class="col-sm-2 control-label">Lastname</label>
	      <div class="col-sm-10">
		<input type="text" name="User[lastname]" value="<?php echo $profile['lastname']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputLastname" class="col-sm-2 control-label">User name</label>
	      <div class="col-sm-10">
		<input type="text" name="User[user_name]" value="<?php echo $profile['user_name']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="text" name="User[password]" value="<?php echo $profile['password']; ?>">
		</div>
	    </div>
		
	    <div class="form-group">
	      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
	      <div class="col-sm-10">
		<input type="text" name="User[email_address]" value="<?php echo $profile['email_address']; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" name="Action" value="Submit"> 
		</div>
	    </div>
	</form>
	</div>
    </div>
</div>