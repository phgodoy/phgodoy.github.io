<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>

<body>

    <?php

    $num = 0 ;
    if(isset($_POST["numero"])){
        $num = $_POST["numero"];
        if(!is_numeric($num)){
        	
            echo "<br>O valor informado não é um número.<br>";
        }else{
    
        
        if($num %2 == 0 ){
            echo "par"; 
        }
        else{
            echo "impar"; 
        }

    }
}

?>

<form method="post">
    <input type="text" name="numero" >
    <input type="submit">
</form>

</body>


</html>
