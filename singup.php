<?php
   $var_fName = $_POST['fName'];
   $var_lName = $_POST['lName'];
   $var_eAddress = $_POST['eAddress'];
   $var_password = $_POST['psw'];
   $var_conpsw = $_POST['psw-repeat'];
 //  extract($_POST, EXTR_PREFIX_ALL, 'var');

    if($var_password == $var_conpsw && $var_password>8 && $var_conpsw>8)
    {
       echo "Thank you for your registration on our website, "
         .$var_fName." ".$var_lName. ".  ";
       echo "email  " .$var_eAddress. " ";
    }
    else{
      echo "password is ";
    }
   

?>
