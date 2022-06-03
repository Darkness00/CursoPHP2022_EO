<?php 
//variables
$valor1="";
$valor2="";
$operador="";
//funciones
function operaciones_valores($valor1,$valor2,$operador)
{
   switch ($operador) {

       case 'Sumar':return $valor1 + $valor2;
           break;
       
        case 'Restar':
            return $valor1 - $valor2;
            break;

        case 'Dividir':
                return $valor1 / $valor2;
                break;

        case 'Multiplicar':
                return $valor1 * $valor2;
                break;
       default:
           return 'operacion no soportada';
           break;
   }
}


if (isset ($_POST['validar'])) {
    $valor1 = $_POST ['valor1'];
    $valor2 = $_POST ['valor2'];
    $operador = $_POST ['operador'];

    if ($valor1 != "" && $valor2 != "") {
        $calculos = operaciones_valores($valor1,$valor2,$operador);
        $resultado = $calculos;
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

    <title>Calculadora</title>
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
          <h1 class="titulo text-center my-4">Calculadora con <span>PHP</span></h1>
      </header>
  </div>

    <div class="container fondo">
    <form action= "<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="valor1" class="form-label">Valor 1:</label>
                        <input type="number" name="valor1" class="form-control" value="<?php if(isset($_POST['valor1'])) { echo $_POST['valor1']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4">
                 <label for="operador" class="form-label">Operador: </label>
                    <select class="form-select" name="operador">    
                            <option value="">--Selecciona el operador--</option>                       
                            <option value="Sumar"<?php if (isset($_POST['operador']) && $_POST ['operador']=='Sumar') {
                               echo 'selected'; }?>>Sumar</option>
                            <option value="Restar"<?php if (isset($_POST['operador']) && $_POST ['operador']=='Restar') {
                               echo 'selected'; }?>>Restar</option>
                            <option value="Dividir"<?php if (isset($_POST['operador']) && $_POST ['operador']=='Dividir') {
                               echo 'selected'; }?>>Dividir</option>
                            <option value="Multiplicar"<?php if (isset($_POST['operador']) && $_POST ['operador']=='Multiplicar') {
                               echo 'selected'; }?>>Multiplicar</option>
                    </select>
                
                
                </div>

                <div class="col-sm-4">
                <label for="valor2" class="form-label">Valor 2: </label>
                <input type="number" name="valor2" class="form-control" value="<?php if(isset($_POST['valor2'])) { echo $_POST['valor2']; } ?>">              
                </div>
           
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
                            echo "$valor1"; switch ($operador) {

                                case 'Sumar':echo " + ";
                                    break;
                                 case 'Restar':
                                     echo " - ";
                                     break;
                                 case 'Dividir':
                                        echo " / ";
                                         break;
                                 case 'Multiplicar':
                                         echo " * ";
                                         break;
                                default:
                                    break;
                            }
                            echo "$valor2 = ".$resultado;
                        }?>
                    </div>             
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>