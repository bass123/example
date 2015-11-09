<div id="content" class="left">
    <div class="row">
	<div class="col-md-push-1 col-md-10">
	    <div class="panel panel-default">
		<div class="panel-heading">List of last all pic's</div>
		    <table class="table table-bordered">
		    <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>view</th>
		    </tr>
<?php
        foreach ($pictures["Rows"] as $row) {
?>
	    <tr>
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><a href="<?php echo $this->buildLink('picture/view/' . $row['ID']); ?>"> View </a></td>
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
