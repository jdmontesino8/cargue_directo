<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>
<body>
  <div class="container">
    <h1>Calculadora</h1> <br>

    <form method="POST">
      Numero 1:
      <input type="Number" name="Numero1" min="-100000" max="100000" required value="0">
      Numero 2:
      <input type="Number" name="Numero2" min="-100000" max="100000" required value="0">
      <br><br>
      <input type="radio" name="opcion" value="Sumar" class="form-check-input" required>Sumar
      <input type="radio" name="opcion" value="Restar" class="form-check-input" required>Restar
      <input type="radio" name="opcion" value="Multiplicar" class="form-check-input" required>Multiplicar
      <input type="radio" name="opcion" value="Dividir" class="form-check-input" required>Dividir
      <br><br>
      <input type="submit" value="Calcular" class="btn btn-success w-25">
      <input type="reset" value="Limpiar" class="btn btn-danger w-25">
    </form>
    <hr>
  </div>
  <div class="container">
    <?php
      if($_POST){
        function sumar(){ 
          echo $_POST['Numero1'] + $_POST['Numero2'];
        }

        function restar(){ 
          echo $_POST['Numero1'] - $_POST['Numero2'];
        }

        function multiplicar(){ 
          echo $_POST['Numero1'] * $_POST['Numero2'];
        }
        function dividir(){ 
         if ($_POST['Numero2']=='0')
            echo "Error, división por cero";
         else{
          $d= $_POST['Numero1'] / $_POST['Numero2'];
          echo $d;
          }
        }
        switch ($_POST['opcion']){
          case 'Sumar':
            sumar();
          break;
          case 'Restar':
            restar();
          break;
          case 'Multiplicar':
            multiplicar();
          break;
          case 'Dividir':
            dividir();
          break;
          default:
           echo "Seleccione alguna de las opciones";
          break;
        }
      }
    ?>
    
  </div>
    
</body>
</html>