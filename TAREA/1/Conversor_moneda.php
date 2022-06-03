<?php 
//variables
$moneda ="";
$divisa_1 ="";
$divisa_2 ="";
//funciones
function cambio_divisa($moneda,$divisa_1)
{
   switch ($divisa_1) {

       case 'cordobas':return $moneda / 1;
           break;
       
        case 'dolares':
            return $moneda * 35.85;
            break;

        case 'euros':
                return $moneda * 38.47;
                break;
       default:
           return 'operacion no soportada';
           break;
   }
}
function cambio_divisa_2($moneda,$divisa_2)
{
    switch ($divisa_2) {

        case 'cordobas':return $moneda * 1;
            break;
        
         case 'dolares':
             return $moneda / 35.85;
             break;
 
         case 'euros':
                 return $moneda / 38.47;
                 break;
        default:
            return 'operacion no soportada';
            break;
    }
}


if (isset ($_POST['validar'])) {
    $moneda = $_POST ['moneda'];
    $divisa_1 = $_POST ['divisa_1'];
    $divisa_2 = $_POST ['divisa_2'];

    if ($moneda != "" && $divisa_1 != "" && $divisa_2 !="") {
        $conversion = cambio_divisa($moneda,$divisa_1);
        $conversion2 = cambio_divisa_2($conversion,$divisa_2);
        $resultado = $conversion2;
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:400,700" rel="stylesheet">

    <title>Conversor</title>
    <style>

      :root {
        --fuentePrimaria: 'Playfair Display', serif;
        --fuenteSecundaria: 'Raleway', sans-serif;
        --primario: #037bc0;
      }

      h2 { font-size: 3rem; }

      .titulo{
          font-family: 'Playfair Display', serif;
      }
      .titulo span {
          color: #037bc0;
      }

     
    .fondo {
        background-color: #def0fc;
    }

    .formulario{
        width: 800px;
        height: 100%;
    } 
        
    </style>
  </head>

  <body>
  <div class="container">
    <header class="header pt-4">
          <h1 class="titulo text-center my-4">Conversor de moneda con <span>PHP</span></h1>
      </header>
  </div>

    <div class="container fondo">
    <form action= "<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="moneda" class="form-label">Cantidad:</label>
                        <input type="number" name="moneda" class="form-control" value="<?php if(isset($_POST['moneda'])) { echo $_POST['moneda']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4">
                 <label for="divisa_1" class="form-label">DE: </label>
                    <select class="form-select" name="divisa_1">    
                            <option value="">--Selecciona la moneda--</option>                       
                            <option value="cordobas"<?php if (isset($_POST['divisa_1']) && $_POST ['divisa_1']=='cordobas') {
                               echo 'selected'; }?>>Córdobas</option>
                            <option value="dolares"<?php if (isset($_POST['divisa_1']) && $_POST ['divisa_1']=='dolares') {
                               echo 'selected'; }?>>Dólares</option>
                            <option value="euros"<?php if (isset($_POST['divisa_1']) && $_POST ['divisa_1']=='euros') {
                               echo 'selected'; }?>>Euros</option>
                    </select>
                </div>

                <div class="col-sm-4">
                 <label for="divisa_2" class="form-label">A: </label>
                    <select class="form-select" name="divisa_2">    
                            <option value="">--Selecciona la moneda--</option>                       
                            <option value="cordobas"<?php if (isset($_POST['divisa_2']) && $_POST ['divisa_2']=='cordobas') {
                               echo 'selected'; }?>>Córdobas</option>
                            <option value="dolares"<?php if (isset($_POST['divisa_2']) && $_POST ['divisa_2']=='dolares') {
                               echo 'selected'; }?>>Dólares</option>
                            <option value="euros"<?php if (isset($_POST['divisa_2']) && $_POST ['divisa_2']=='euros') {
                               echo 'selected'; }?>>Euros</option>
                    </select>
                </div>

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4"name="validar"><h1>=</h1></button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <!-- <label for="resultado" class="form-label">RESULTADO:</label> -->
                    <div class="alert alert-success h-100" role="alert">
                        <strong>RESULTADO: </strong> <?php if (isset($resultado)) {
                            echo $resultado;
                        }?>
                    </div>             
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>