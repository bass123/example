<div class="col-md-push-2 col-md-8" >
    <form enctype="multipart/form-data"  action="<?php echo $this->buildLink('picture/uploadPicture'); ?>" method="POST">
	<div class="thumbnail">   
        <div class="form-group">
              <label for="userNameField">Teкст към снимката: </label>
              <input type="text" class="form-control" name="text" placeholder="Teкст към снимката">
        </div>
        
         <div class="form-group">
            <label for="userPicField">Избор снимка...</label>
            <input type="file" name="picture">
            <p class="help-block">Изберете ваша снимка.</p>
          </div>
        
        <div class="form-inline">
            <div class="row" >   
		<button type="submit" class="col-xs-push-1 col-xs-4 btn btn-primary" id="submit" name="Action" value="submit">Потвърди</button>
		<button type="reset" class="col-xs-push-3 col-xs-4 btn btn-default">Нулирай</button>
            </div>
	</div>
	</div>
    </form>
</div>
