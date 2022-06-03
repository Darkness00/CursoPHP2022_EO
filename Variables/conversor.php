<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:400,700" rel="stylesheet">

    <title>Conversor de Longitud</title>
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
          <h1 class="titulo text-center my-4">Conversor de Longitud con <span>PHP</span></h1>
      </header>
  </div>
  b4
    <div class="container fondo">
        <form>
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" value="<?php if(isset($_POST['valor'])) { echo $_POST['valor']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4">
                 <label for="desde" class="form-label">DE: </label>
                    <select class="form-select">    
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                    </select>
                
                
                </div>

                <div class="col-sm-4">
                <label for="desde" class="form-label">A: </label>
                        <select class="form-select">
                            <option value="">--Selecciona un valor--</option>  
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                        </select>              
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4">CONVERTIR</button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <!-- <label for="resultado" class="form-label">RESULTADO:</label> -->
                    <div class="alert alert-success h-100" role="alert">
                        <strong>RESULTADO: </strong> Aqui va
                    </div>             
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>