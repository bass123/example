    <div class="row">
	<div class="col-md-push-2 col-md-8 thumbnail">
	    <h2> Picture edit </h2><hr>
	    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action = "<?php echo $this->buildLink('pictures/uploadPicture/'. $picture['ID']);?>">
		<div class="form-group">
		    <label for="inputName" class="col-sm-2 control-label">Picture text: </label>
		    <div class="col-md-10">
			<input type="text" name="text" value="<?php echo $picture['text'] ?>">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputSurname" class="col-sm-2 control-label">Picture</label>
		    <div class="col-md-10">
			<a href="<?php echo $this->buildLink('picture/view/'.$row['pic_id']); ?>" class="thumbnail">
			    <img src="<?php echo '/exercise/application/front/views/templates/main/pictures/'. $picture['name'];?>" alt="...">
			</a>
		    </div>
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

	    </form>
	</div>
    </div>
