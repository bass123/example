<?php 
$id = $picture['ID'];
?>
<div class="row">
  <div class="col-md-push-3 col-md-6 center-block">
    <a class="thumbnail">
	<img src="<?php echo $this->path_template ."pictures/". $picture['name']?>" alt="...">
    </a>
    <?php 
    if($_SESSION['user'] == $picture['user_id']){
?>
      <a class="btn btn-danger" href="<?php echo $this->buildLink('picture/delete/'. $id);?>" role="button">Delete picture</a>
<?php
    }
    ?>
    
    <nav>
	<ul class="pager">
<?php
    $pictureNext = $prevNext['1']['ID'];
    $picturePrev = $prevNext['0']['ID'];
    if(!empty($pictureNext)){
?>
	<li><a href="<?php echo $this->buildLink('picture/view/'.$picturePrev);?>">Prev</a></li>
<?php
    }
    if(!empty($picturePrev)){
?>
	
	<li><a href="<?php echo $this->buildLink('picture/view/'.$pictureNext);?>">Next</a></li>
<?php
    }
 ?>
	</ul>
    </nav>  
<?php 
    if(!empty($_SESSION)){
?>	
<?php

    


    if($commentarsCount<10){
?>
      
      <form class="form-horizontal" method="POST" action="<?php echo $this->buildLink('picture/comment'); ?>">
	<div class="form-group">
	    <label for="inputCommentar">Въведи коментар: </label>
	    <input type="hidden" name="Commentars[picture_id]" value="<?php echo $picture['ID'] ?>">
	    <input type="hidden" name="Commentars[user_id]" value="<?php echo $_SESSION['user']; ?>">
		<textarea class="form-control" rows="3" id="inputCommentar" name = Commentars[text]" placeholder="Komentar...."></textarea>
	</div>
	<div class="form-group">
	    <div class="col-md-offset-10 col-md-2">
		<input class="btn btn-default col-md-12"type="submit" name="Action" value="Submit"> 
	    </div>
	</div>
    </form>
<?php	
    }
	if(!empty($commentars)){
	    foreach ($commentars as $row){
    ?>
	<div class="media thumbnail">
	    <div class="media-body">
		<h4 class="media-heading"><?php echo $row['name'] . ' '. $row['lastname']; ?></h4>
			<?php echo $row['text']; ?>
	    </div>
	</div>
<?php	    
	    }
	}
    }
?>    
  </div>

</div>