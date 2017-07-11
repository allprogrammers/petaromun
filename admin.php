<?php
	$title='PETARO-MUN | Administration';
	$page='';
	$error=0;
	require('header.php');
	//require('connect.php');
	if(isset($_POST['submit']))
	{
		if($_POST['username']=='pawanadmin' && $_POST['password']=='pawanadminpass')
		{
			$sql='SELECT * FROM delegates';
			$result=query($sql);
			foreach($result as $key => $value)
			{
				echo "<div class='container' style='width: 1170px;margin-bottom: 2%'><div class='row' style='border: outset 1px;'>";
				/*echo "<form class='form-horizontal' ><div class='form-group'>";*/
				$photo=$value['rephoto'];
				/*echo "<div class='form-group'><label class='control-label col-sm-3' ></label><div class='col-sm-4'><img style='width:100px;height:100px;' src='$photo'/></div></div>";*/
				foreach($value as $keey =>$valuee)
				{
					if($keey!='rephoto' && $keey!='passcode')
					{
						echo "<form class='form-horizontal' ><div class='form-group'>";
						echo "<label class='control-label col-sm-3' >$keey</label>";
						echo "<label class='control-label col-sm-4' >$valuee</label>";
						echo "</div></form>";
					}
					
				}
				echo "<form class='form-horizontal' ><div class='form-group'>";
				echo "<div class='col-sm-12' style='float: right'><img style='width:100px;height:100px;' src='$photo'/></div>";
				echo "</div></form>";
				echo "</div></div>";
				//echo "</div></form>";
			}
			//print_r($result);
			require('footer.php');
			exit();
		}else
		{
			$error=1;
		}
	}
	
	
?>
<div  class="col-sm-9" style='float:none;width:400px;margin-left: auto;margin-right: auto;margin-bottom:2%' >
	<form method="post" action="admin.php" enctype="multipart/form-data" class="form-horizontal" >
		<?php
			if($error==1)
			{
				echo "<div class='form-group'><label class='control-label col-sm-12' style='color: red'>Invalid credentials.</label></div>";
			}else{
			    echo "<div class='form-group'><label class='control-label col-sm-12' style='color: aliceblue'>For registration team only</label></div>";
			}
		?>
		<div class="form-group">
			<label class="control-label col-sm-3">Username:</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name='username'>
			</div>
			<label class="control-label col-sm-3">Password:</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" name='password'>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3"></label>
				<div class="col-sm-4" style='float:right;'>
					<input class="form-control btn" type='submit' style='border: 1px solid;background-color: aliceblue;' value='Log In' name='submit'>
				</div>
			</div>
	</form></div>
<?php
	require('footer.php');
?>