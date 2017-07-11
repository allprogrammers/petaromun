<?php
	$title='PETARO-MUN | Contact';
	$page='contact';
	require 'header.php';
	$items = array();
	$error=0;
	if(isset($_POST['submit']))
    {
		foreach($_POST as $key => $submitted)
        {
            //$submit[]= $submitted;
			if($submitted =='')
			{
				$error = 1;
				break;
			}
            if($submitted!='Submit'){
				$items[$key] = mysql_real_escape_string(htmlspecialchars($submitted));
            }
        }
		if(!$error)
		{
			require('connect.php');
            extract($items);
			$sql="INSERT INTO messages VALUES(?,?,?,?,0)";
			$result=query($sql,"NULL",$email,$message,$name);
		}
	}
	
?>

<div  class="col-sm-9" style='float:none;width:700px;margin-left: auto;margin-right: auto;margin-bottom:5px;margin-top:5px' >
	<form class="form-horizontal" action='contact.php' method='post'>
		<?php
			if($error ==1)
			{
				echo "<div class='form-group'><label class='control-label col-sm-8' style='color: red'>Please comply</label></div>";
			}
		?>
		<div class="form-group">
			<label class="control-label col-sm-3">Name:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name='name' placeholder='Enter Name'>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">Email:</label>
			<div class="col-sm-5">
			  <input type="email" class="form-control" name='email' placeholder="Enter email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" >Message:</label>
			<div class="col-sm-5">
				<textarea placeholder='(Max 500 letters)' name='message' maxlength='500' class="form-control" style='height:100px'></textarea>
			</div>
		</div>
		<div class="form-group"><label class="control-label col-sm-3"></label><div class="col-sm-5"><input type='submit' class="form-control btn" value='Submit' name='submit'></div></div>
	</form>
</div></div>

<?php
	require 'footer.php';
?>