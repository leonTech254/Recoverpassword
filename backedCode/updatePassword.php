<?php

require_once("./database.php");
$verifacationCode=$_POST['verifacationCode'];
$password=$_POST['password'];
$ConPassword=$_POST['ConPassword'];
if($verifacationCode=='' || $password=='' || $ConPassword=='')
{
    echo "all field required";
}
else
{
    if($password!=$password)
    {
        echo "password do not match";
    }else
    {
        $user_check_query = "SELECT * FROM RecoverCodes WHERE resetCode='$verifacationCode' AND Used='no'  LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if($user=='')
        {
            echo 'invalid reset code';
        }else
        {
            $userEmail=$user['email'];
            $update="UPDATE RecoverCodes SET Used='yes' WHERE email='$userEmail'";

            mysqli_query($db,$update);
            // encrypt password
            $hashed_password = md5($password);

            $update="UPDATE users SET password='$hashed_password' WHERE email='$userEmail'";
            mysqli_query($db,$update);

            echo "<span style='color:green;'>password updated successfully</span>";
         

        }
    }
}




?>