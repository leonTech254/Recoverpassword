
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
   echo <<<_END
    <script src="../jquery.js"></script>



    _END;

    ?>
    
</head>
<body> 
   
<?php
require_once("./database.php");
// $location="/projects/project/jquery.js";


$userEmail=$_POST['UserEmail'];
// check if email exists
$user_check_query = "SELECT * FROM users WHERE email='$userEmail' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);





if ($user) { // if user exists
  if ($user['email'] === $userEmail) {
    $userEmail=$user['email'];
    

    // generate the random code
    function generateCode($db,$userEmail)
    {
        $resetCode='';
    $string="12345678abcdefghijklmnopqrst";
    $stringlen=strlen($string);
    $resetCodeLength=6;
    for($i=0;$i<$resetCodeLength;$i++)
    {
        $resetCode.=$string[rand(0,$stringlen-1)];

    }
    $code=strtoupper($resetCode);
    $update="UPDATE RecoverCodes SET Used='yes' WHERE email='$userEmail'";

    mysqli_query($db,$update);

    $insert_data="INSERT INTO RecoverCodes(resetCode,email) VALUES('$code','$userEmail')";
    mysqli_query($db,$insert_data);
    return $code;
    }
    $code=generateCode($db,$userEmail);
    

    echo <<<_END
    <div class="confirm-card">
    <span>Send resent code to email:</span>
    <span>$userEmail</span>
    <button id='confirm-box'>yes?</button>
    </div>
    <script>
    $('#confirm-box').click((e)=>{
        e.preventDefault();
        let base_url="YOUR_API__HERE"
        $.ajax({
            type: "POST",
            url:`YOUR_API_HERE`,
            contentType : 'application/json',
            async: false,
            data:JSON.stringify({email:"$userEmail",code:"$code"})
            
            
        })
    })
    document.getElementById("confirm-box").click()
    $(".email-field").fadeOut(2000)
    

    
    </script>    
    _END;
  }
}
else
{

    echo "email does not exist";
}



// email configuration

?>



<style>

.confirm-card
{
    width: 32%;
    height: 15rem;
    border: 1px solid #B0C4DE;
    color: red;
    background-color: white;
    margin: auto;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -1;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    display: none;

}


.confirm-card button
{
    padding: 5px;
    background: none;
    border: 1px solid orange;
    padding-left: 10px;
    padding-right: 10px;
    text-transform: uppercase;
    font-size: large;
    color: black;
    gap: .5rem;

}
</style>
<script>
   

</script>
    
</body>
</html>


