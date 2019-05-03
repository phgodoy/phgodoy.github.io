 <?php

    $tab = 0;
    $x;
    if(isset($_POST["edTABUADA"]) and isset($_POST["edX"])){
        $tab = $_POST["edTABUADA"];
        $x = $_POST["edX"];
        if(!is_numeric($tab)){
        	
            echo "<br>O valor informado não é um número.<br>";
        }else{
    	
        
        $num=0;
        while($num<=10){
            echo   $num . " x " . $tab . " = " . ($num * $tab) . "<br>";

            $num++;
        }

    }
    echo x;

}

?>