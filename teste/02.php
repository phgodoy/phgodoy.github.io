<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>

<body>

    <?php

    $tab = 0;
    if(isset($_POST["CHAR"])){
        $tab = $_POST["CHAR"];

        echo $tab ;
       }

?>

<form method="post">
    <input type="text" name="CHAR" >
    <input type="submit">
</form>

</body>


</html>