<?php 

include_once '../07-documentos/db.php';

// var_dump($_FILES);

//tabla de la BD
$tabla = "documentos";

//directorio donde se guardara el archivo
$uploadDir = "/doc";


if (!empty($_FILES['file']['name'])) 
{
    //asignar esas variables 
    $tmpFile = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size'];

    //subimos el archivo 
    //cambiar el nombre del archivo
    $fileName = time().'-'.$_FILES['file']['name'];
    $urlDoc = $uploadDir.'/'.$fileName;


    //obtener el MIME

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $fileContents = file_get_contents($tmpFile);
    $mimeType = $finfo->buffer($fileContents);

    //validamos las extensiones

    // $extensionesValidas = ["image/jpeg", "image/png", "image/jpg","application/pdf" ];

//mover del directorio temporal al nuevo directorio


    move_uploaded_file($tmpFile,$urlDoc);

    $cadena = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, url, file, type, size ) VALUES (:name, :url, :file, :type, :size)");

    $cadena->bindParam(":name",$fileName, PDO::PARAM_STR);
    $cadena->bindParam(":url",$urlDoc, PDO::PARAM_STR);
    $cadena->bindParam(":file",$tmpFile, PDO::PARAM_STR);
    $cadena->bindParam(":type",$fileType, PDO::PARAM_STR);
    $cadena->bindParam(":size",$fileSize, PDO::PARAM_STR);

    if ($cadena->execute()) {
       // echo "se guardo correctamente";
        header("location:index.php?mensaje=ok");
    }
    else{
        //echo "no se guardo";
      header("location:index.php?mensaje=error");
    }

    $cadena = null;



















}





?>