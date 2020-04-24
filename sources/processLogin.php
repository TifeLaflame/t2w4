<?php
    include('Classes/DbCon.php');
    $oDb= new DbCon();

    $conn = $oDb->connect();
    $sqlstmt =$conn->prepare("SELECT * FROM users WHERE strUsername =?");
 
    $sqlstmt->bind_param('s', $loginUsername);

    //define the linkage first and then set the value

    $loginUsername = $_POST['username'];
    //$loginPassword =$_POST['password'];

    $sqlstmt->execute();

    //get result value from database
    $result = $sqlstmt->bind_result($col1, $col2);

    $arrWhichUser = $result->fetch();

    //print_r($arrWhichUser);
    

    //close statement
    $sqlstmt->close();

    //close connection
    if ($arrWhichUser['strPassword'])
    {
        header('location: dashboard.php');
    }else 
    {
        echo"you did not provide valid username and password";
    }
$conn->close();

?>
