<?php


    $commands = array(
        "echo $PWD",
        "whoami",
        "git pull",
        "git status",
        "git submodule sync",
        "git submodule update",
        "git submodule status",
    );
    $output = '';
    foreach($commands as $command){
        // $tmp = shell_exec($command);
        $tmp = exec($command);
        $output .="<span style=\"color:black;\">\${$command}</span><br>";
        $output .= htmlentities(trim($tmp))."<br><br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$output ?>
</body>
</html>