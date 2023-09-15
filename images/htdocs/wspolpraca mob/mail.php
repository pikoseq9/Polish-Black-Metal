<?php
    if(isset($_POST['wyslij']) ){
    
        if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])){
            $name = $_POST['name'];
            $succes = true;
            if (!preg_match("/([a-z]+(\s[a-z]+))+/i",$name)) {
                $Err = $name;
                $succes = false;
            } 
            $phone = $_POST['phone'];
            if (!preg_match("/\+?\d{1,3}[\s.-]?\d{2,3}[\s.-]?\d{2,3}[\s.-]?\d{2,3}$/i",$phone)) {
             	$Err = var_dump($phone); 
                $succes = false;
            }
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $Err = "Niepoprawny adres email"; 
                $succes = false;
            }
            $nation = $_POST['nation'];
            if (!$nation) {
                $Err = "Niepoprawna narodowość"; 
                $succes = false;
            }
        	$utm = $_POST['utm'];
            if($succes){
                $to = "bankomaty@ottoworkforce.pl";
                $today = date("Y-m-d H:i:s");
                $subject = "Zgłoszenie ".$today;
                $message = "Imię i nazwisko: ".$name."\nTelefon:  ".$phone."\nE-mail: ".$email."\nNarodowość:  ".$nation."\nUTMcode: ".$utm;
                $header = "Zgłoszenie:"; 
                $retval = mail($to,$subject,$message,$header);
                if( $retval == true) {
                    header('Location: index.php?success&utm_source='.$utm);
                } else {
                    header('Location: index.php?error=server&utm_source='.$utm);
                }
            } else {
                header('Location: index.php?error=wrongData&utm_source='.$utm);
            }
        } else {
            header('Location: index.php?error=fieldEmpty&utm_source='.$utm);
        }
    }