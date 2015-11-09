<div id="container">
    <div class="col-md-push-1 col-md-10">
        <h1>Contact with us</h1>
	<form class="form-horizontal" method="POST" action = "<?php echo $this->buildLink('contacts/sendmail');?>">
	    <div class="form-group">
		<label for="inputCommentar">Заглавие: </label>
		<input type="text" class="form-control col-md-5" rows="3" id="inputCommentar" name = Contacts[title]" placeholder="Заглавие....">
	    </div>
	    
	    <div class="form-group">
		<label for="inputCommentar">Имейл за обратна връзка: </label>
		<input type="email" class="form-control col-md-5" rows="3" id="inputCommentar" name = Contacts[user_email]" placeholder="Заглавие....">
	    </div>

		<?php 
		if(empty($_SESSION)){
?>	    
		<div class="form-group">
		    <label for="inputCommentar">Име: </label>
		    <input type="text" class="form-control col-md-5" rows="3" id="inputCommentar" name = Contacts[user_name]" placeholder="Заглавие....">
		</div>
<?php
		} else {
?>
		<input type="hidden" name="Contacts[user_name]" value="<?php echo $_SESSION['user_name']; ?>" >
<?php 
		}	
?>		
			    
	    <div class="form-group">
		<label for="inputCommentar">Teкст: </label>
		<textarea class="form-control col-md-5" rows="3" id="inputCommentar" name = Contacts[text]" placeholder="Въведи текст ...."></textarea>
	    </div>
	    
	    <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" name="Action" value="Submit"> 
		</div>
	    </div>
	</form>
	</div>
</div>

