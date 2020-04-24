<?php 

    Class Listing
    {
        
        public static function doInsert()
        {
            
            $fullName = Input::string($_POST['fullName']);
            //echo $fullName;

            $email = Input::email($_POST['email']);
            //echo $email;

            $message = Input::string($_POST['message']);
            //echo $message;

            $link = Input::url($_POST['link']);
            //echo $link;

            $filename = "";
            $arrFileTypes = array("pdf", "doc", "docx");

            $checkFile = pathinfo($_FILES["resume"]["name"])["extension"];
            if (in_array($checkFile, $arrFileTypes))
            {
	                $filename = $_FILES["resume"]["name"];

                    move_uploaded_file($_FILES["resume"]["tmp_name"], "assets/".$filename);
            }
        
            if (($fullName) && ($email) && ($message) && ($link) && ($filename))
            {
                $arrInfo = DbCon::writeData("INSERT INTO contactform(strName, strEmail, strMessage, strLink, strResume) VALUES ('".$fullName."','".$email."','".$message."','".$link."', '".$filename."')");
            }       
            //echo $arrInfo;
            //die;
            header("location:success.php");
        }
    }
?>