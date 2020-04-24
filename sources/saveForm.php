<?php
	include('Classes/DbCon.php');
	include('FormValidate.php');
	$oDb =new DbCon();
	
	//https://www.formget.com/sanitization-and-validation-using-php/
	// Initializing Error Variables To Null.
	$nameError ="";
	$emailError ="";
	$messageError="";
	$urlError ="";
	$fileError="";
	// This code block will execute when form is submitted
	if(isset($_POST['submit']))
	{
	/*--------------------------------------------------------------
	Fetch name value from URL and Sanitize it
	--------------------------------------------------------------*/
	if($_POST['fullName'] != ""){
	// Sanitizing name value of type string
		$_POST['fullName'] = filter_var($_POST['fullName'], FILTER_SANITIZE_STRING);
	
		if ($_POST['name'] == ""){
			$nameError = "<span class='invalid'>Please enter a valid name.</span>";
		}
	} else 
	{
		$nameError = "<span class='invalid'>Please enter your name.</span>";
	}
	/*------------------------------------------------------------------
	Fetch email value from URL, Sanitize and Validate it
	--------------------------------------------------------------------*/
	if($_POST['email'] != "")
	{
		//sanitizing email
		$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	//After sanitization Validation is performed
		$_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	
		if($_POST['email'] == "")
		{
			$emailError = "<span class='invalid'>Please enter a valid email.</span>";
		}
	} else 
	{
		$emailError = "<span class='invalid'>Please enter your email.</span>";
	}
	if($_POST['message'] != "")
	{
		// Sanitizing name value of type string
			$_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		
			if ($_POST['message'] == "")
			{
				$messageError = "<span class='invalid'>Please enter a valid name.</span>";
			}
	} else 
	{
		$messageError = "<span class='invalid'>Please enter your full name.</span>";
	}
	/*---------------------------------------------------------------------------
	Fetch website value from URL, Sanitize and Validate it
	----------------------------------------------------------------------------*/
	if($_POST['link'] != "")
	{
		//sanitizing URL
		$_POST['link'] = filter_var($_POST['link'], FILTER_SANITIZE_URL);
		//After sanitization Validation is performed
		$_POST['link'] = filter_var($_POST['link'], FILTER_VALIDATE_URL);
	
		if ($_POST['link'] == "")
		{
		$urlError = "<span class='invalid'>Please enter a valid website start with http:// </span>";
		}
	}else 
	{
		$urlError = "<span class='invalid'>Please enter your website URL.</span>";
	}

	$arrFileTypes = array("pdf", "doc", "docx");

	$filename = $_FILES['resume']['name'];
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	$file = $_FILES['resume']['tmp_name'];
	$arrFileTypes = array("pdf", "docx", "doc");

	if (in_array($extension, ['zip', 'pdf', 'docx'])) 
	{
		move_uploaded_file($_FILES["strResume"]["tmp_name"], "assets/".$filename);
		$_POST["strResume"] = $filename;
	
	} else
	{
		$fileError = "<span class='invalid'>you did not upload a valid file type.</span>";
	}

	if (($_POST["fullName"]) && ($_POST["email"]) && ($_POST["message"]) && ($_POST["link"])  && ($_POST["resume"]))
	{
		$sql = "INSERT INTO contactform(strName, strEmail, strMessage, strLink, strResume) VALUES ('" .$_POST['fullName']."', '" . $_POST["email"]."', '" .$_POST["message"]."', '" .$_POST["link"]."', '" .$_POST["resume"]."')";
		echo $sql; 
		die;
	}
	mysqli_query($oDb->connect(), $sql);

	header("location: thankyou.php?success=true");
}
?>
        public static function checkFileType($arrFile)
        {
            //print_r($_FILES);
            $filename = $arrFile['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $arrFileTypes = array("pdf", "docx", "doc");
            if (in_array($extension, $arrFileTypes)) 
            {
                return true;
                //move_uploaded_file($_FILES["strResume"]["tmp_name"], "assets/".$filename);
            
            }else 
            {
                return false;
                //echo "you did not upload a valid file type";
            }
        }