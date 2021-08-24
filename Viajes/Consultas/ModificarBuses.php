<?php 
	require_once'../Conexiones/conexion.php';


    $Placa=$_POST["Placa"];
    $Modelo=$_POST["Modelo"];
    $Marca=$_POST["Marca"];
    $Color=$_POST["Color"];
   
    
    $sql="UPDATE buses SET Modelo ='$Modelo',  Marca='$Marca', Color ='$Color',  Placa = '$Placa' WHERE Placa= :Placa ";

    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        'Placa'=>$Placa

        ]);

    $Identificacion=$stmt->fetch();

  echo "<script> alert(' buses Modificado'); window.location.href='../Acceso.php'; </script>" ;
	
?>
