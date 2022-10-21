<?php
 // $string=4;
 $resetCode='';
 $string="1234567890";
 $stringlen=strlen($string);
 $resetCodeLength=4;
 for($i=0;$i<$resetCodeLength;$i++)
 {
     $resetCode.=$string[rand(0,$stringlen-1)];

 }
 $code="INTE/MG/".$resetCode."/09/19";
 echo $code;




?>