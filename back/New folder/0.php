<?php
$middlename = "";



$servername = 'localhost';
        $dbname = 'myDB';
        $username = 'root';
        $pw = '';

        $dataCon = new PDO('mysql:host='.  $servername. ';dbname=' .$dbname. ';', $username, $pw);
        $sql = "INSERT INTO `visitors` (`middlename`) VALUES (:middlename);";

        function returnProperPARAM($var){
            if($var === ""){
                $param = PDO::PARAM_NULL; 
            }else{
                $param = PDO::PARAM_STR;
            }
            return $param;
        }

        $param = returnProperPARAM($middlename);
        $sta = $dataCon -> prepare($sql);
        $sta -> bindParam(':middlename', $middlename, $param);
      
        
    
        
        $sta -> execute();
        $dataCon = null;
        $sta = null;


?>

