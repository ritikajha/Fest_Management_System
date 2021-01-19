<?php
@session_start();
//checking for session and then changing the header location if destroyed
if (isset($_SESSION['pid']))
{
    if(session_destroy())
    {   
        header('location: plogin.php');
    }
}
?>