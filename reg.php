<?php
	$title='PETARO-MUN | Register';
	$page='register';
	require('header1.php');
    $error=0;
    $uperror=0;
    $suc=0;
	$items = array();
	
	if(isset($_POST['submit']))
    {
        //$submit = array();
        if(!(isset($_POST['agree']) && $_POST['agree']== 'on'))
			$error=1;
		else
		{
			$name=htmlspecialchars($_POST['name']);
			$cnic=htmlspecialchars($_POST['cnic']);
			$message="\n\n";
			foreach($_POST as $key => $submitted)
			{
				//$submit[]= $submitted;
				if($submitted =='' && $key!='contact' && $key!='referer' && $key!='exp')
				{
					$error = 1;
					break;
				}
				if($submitted!='Submit'){
					$items[$key] = mysql_real_escape_string(htmlspecialchars($submitted));
					/*$message = $message.htmlspecialchars($key).":			    ";
					$message = $message.htmlspecialchars($submitted);
					$message = $message."\n";*/
				}
			}
			

			if(!$error)
			{
				if($_FILES["ppic"]["size"] != 0)
				{
					if ($_FILES["ppic"]["error"] == 0)
					{
						$temp = explode(".", $_FILES["ppic"]["name"]);
						$newfilename=$name.$cnic.".".end($temp);
						$pass=$newfilename;
						move_uploaded_file($_FILES["ppic"]["tmp_name"], "./passphoto/" . $newfilename);
					}else{
						$uperror=1;
						break;
					}

					if($_FILES["pxp"]["size"] != 0)
					{
						if ($_FILES["pxp"]["error"] == 0)
						{
							$temp = explode(".", $_FILES["pxp"]["name"]);
							$newfilename=$name.$pass.$name.$cnic.".".end($temp);
							$pxp=$newfilename;
							move_uploaded_file($_FILES["pxp"]["tmp_name"], "./pre-exp/" . $newfilename);
						}else{
							$uperror=1;
							break;
						}
					}
				}else
				{
					$uperror=1;
				}
				
				if($uperror==0)
				{
					
					
                    /*$filename='2020152020';
					$current = file_get_contents($filename);
					$current .= $message;
					file_put_contents($filename,$current);
					
					$_SESSION['message']=$message;*/
					extract($items);
					global $pass,$pxp;

					/*$sql="SELECT id FROM `delegates` WHERE `rephoto` = './passphoto/'+? OR `prephoto` = './pre-exp/'+?";
					
					
					$result=query($sql,$pass,$pxp);
					print_r($result);*/
                    require('connect.php');
					$sql="INSERT INTO delegates VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$result=query($sql,"NULL",$name,$dob,$cnic,$qualification,$group,$institute,$compref,$email,$contact,"./passphoto/".$pass,"./pre-exp/".$pxp,$referer,$passwordt,0);
					$suc = 1;
				}
			}
		}
		
	}

    //
	
?>
<style>    .form-group{
        width: fill-available
    }
</style>
	
    <div class='col-sm-9' style='float:none;width:700px;margin-left: auto;margin-right: auto;margin-bottom:5px;margin-top:5px' >
	  <form method="post" action="reg.php" enctype="multipart/form-data" name='register' class="form-horizontal" >
		<?php
			if($error == 1)
				echo "<div class='form-group'><label style='color: red' class='control-label col-sm-12'>Please fill in all of the fields.</label></div>";
			else if($uperror==1)
				echo "<div class='form-group'><label style='color: red' class='control-label col-sm-12'>There were errors uploading your pictures</label></div>";
			else if ($suc==1)
				echo "<div class='form-group'><label style='color: cadetblue' class='control-label col-sm-12'>Successfully registered. If you want, register an other delegate or explore the site</label></div>";
		?>
		<div class="form-group">
			<label class="control-label col-sm-3">Name:</label>
			<div >
				<input type="text" class="form-control" name='name' placeholder='Enter Name'>
			</div>
			<label class="control-label col-sm-3">DOB:</label>
			<div >
				<input type="date" class="form-control" name='dob' placeholder="Date of Birth">
			</div>
			<label class="control-label col-sm-3">Gender:</label>
			<div >
				<select class="form-control" name='gender'><option value='male'>Male</option><option value='female'>Female</option></select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">Decent Photo:</label>
			<div >
				<input class="form-control" type='file' name='ppic'>
			</div>
		
			<label class="control-label col-sm-3">CNIC:</label>
			<div >
				<input type="tel" class="form-control" name='cnic' placeholder="National ID Card No (Guardians maybe)">
			</div>
			<label class="control-label col-sm-3" for="email">Email:</label>
			<div >
			  <input type="email" class="form-control" name='email' placeholder="Enter email">
			</div>
			<label class="control-label col-sm-3" >Contact:</label>
			<div >
			  <input type="tel" class="form-control" name='contact' placeholder="Phone number (Optional)">
			</div>
			<label class="control-label col-sm-3">Referer:</label>
			<div >
				<input class="form-control" type='text' name='referer' placeholder='(Optional)'>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">Institute:</label>
			<div >
				<input class="form-control" type='text' name='institute' placeholder='Private If None'>
			</div>
			<label class="control-label col-sm-3">Qualification:</label>
			<div >
				<input class="form-control" type='text' name='qualification' placeholder='A-levels maybe'>
			</div>
			<label class="control-label col-sm-3">Study group:</label>
			<div >
				<input class="form-control" type='text' name='group' placeholder='Pre-engineering maybe'>
			</div>
			<label class="control-label col-sm-3">MUN experienced?</label>
			<div >
				<label class="control-label col-sm-3"><input value='yes' type='radio' style='width: 20px;' name='exp'>Yes</label><label class="control-label col-sm-3"><input style='width: 20px;' type='radio' value='no' name='exp'>No</label>
			</div>
			
			<label class="control-label col-sm-3">Certificate Picture:</label>
			<div >
				<input class="form-control" type='file' name='pxp'>
			</div>
			<label class="control-label col-sm-3">Committee :</label>
			  <div >
			  <select class="form-control" name='compref'>
				<option>SPECPOL</option>
				<option>ICC</option>
				<option>Media Corps</option>
			  </select>
			  </div>
			  <label class="control-label col-sm-3">Passcode:</label>
			<div >
				<input class="form-control" type='password' name='passwordt' placeholder='Type some secret passcode here'>
			</div>
			<label class="control-label col-sm-3"></label>
			<div >
				<input type='checkbox' name='agree'><label class="control-label"> I agree to the <a href='#'>terms and conditions</a>.</label>
			</div>
			</div>
			
			<div class="form-group" style="max-width: 400px">
				<label class="control-label col-sm-3"></label>
				<div class="col-sm-4" style='float:left;'>
					<input class="form-control btn" type='reset' style='border: 1px solid;background-color: aliceblue;' value='Reset'>
				</div>
				<div class="col-sm-4" style='float:right;'>
					<input class="form-control btn" type='submit' style='border: 1px solid;background-color: aliceblue;' value="Submit" name='submit'>
				</div>
			</div>
	  </form>
	</div></div>

<?php
	require "footer.php";
?>