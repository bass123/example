<?php 
    if(!empty($commentars)){
?>

<div id="content" class="left">
	<div class="row">
	    <div class="col-md-push-1 col-md-10">
		<table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Commentar text</th>
                    <th>user_name</th>
                    <th>email_address</th>
                    <th>delete</th>
                </tr>
<?php
        foreach ($commentars as $row) {
?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['text']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><a class="btn btn-danger" href="<?php echo $this->buildLink('commentars/delete/' . $row['ID'] . '/?pic='. $pic_id ); ?>"> DELETE </a></td>
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

<?php 
    } else {
	echo "<h2> Tazi snima nqma komentari shte bydete prenasechen sled 3 sec </h2>";
    
?>
<script type="text/JavaScript">
      setTimeout("location.href = '<?php echo $this->buildLink('pictures/index');?>';",3000);
 </script>

<?php } 
