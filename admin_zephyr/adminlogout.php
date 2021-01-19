<?php
@session_start();
if (isset($_SESSION['a']))
{
    if(session_destroy())
    {   
        $URL="http://localhost/front_zephyr/adminlogin.php";
          echo "<script>location.href='$URL'</script>";
    }
}
?>