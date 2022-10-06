
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
   echo <<<_END
    <script src="/projects/project/jquery.js"></script>



    _END;

    ?>
    
</head>
<body> 
   
<?php
// $location="/projects/project/jquery.js";


$userEmail=$_POST['UserEmail'];
// check if email exists



// email configuration
echo <<<_END
<div class="confirm-card">
<span>Send resent code to email:</span>
<span>$userEmail</span>
<button id='confirm-box'>yes?</button>
        


</div>
<script>
$('#confirm-box').click(()=>{
    let base_url="http://127.0.0.1:5000"
    $.post(`http://127.0.0.1:5000/send/email/recover`,{"data":"hello leon"})
})

document.getElementById("confirm-box").click()

</script>




_END;
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


