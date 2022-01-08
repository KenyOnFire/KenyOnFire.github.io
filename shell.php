<?php
    if(isset($_POST['submit']))
    {
        $output=shell_exec('whoami');
        echo $output;
    }
?>