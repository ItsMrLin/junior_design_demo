<?php
    if ($_GET["email"] == "zlin48@gatech.edu") {
        header( 'Location: interviewer.html' ) ;
    } else {
        if ($_GET["email"] == "faye413@gatech.edu") {
            header( 'Location: interviewee.html' ) ;    
        } else {
            header( 'Location: login.html' ) ;    
        }
            
    }
?>