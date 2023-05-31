<!doctype html>
<html lang="en">

<head>
  <title>calculadora</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <?php
    session_start();
    if (isset($_POST['numero'])) {
        if($_POST['numero'] == "c"){
            $_SESSION['num1'] = null;
        }else if($_POST['numero'] == "←"){
            $_SESSION['num1'] = substr($_SESSION['num1'],0, -1);
            // $_SESSION['num1'] = substr($_SESSION['num1'], 0, strlen($_SESSION['num1']) - 1);
        }else{
            if (isset($_SESSION['num1'])) {
                $_SESSION['num1'] .= $_POST['numero'];
            } else {
                $_SESSION['num1'] =  $_POST['numero'];
            }
        }
    }
// if($_POST["numero"]=="="){
//       echo $_POST["num1"] + $_POST["numero"];
//   }
//   else{

//   }
?>
  <main>

<form method="POST">
  <div class="base">
    <div class="row">
      <div class="seccion">
      <input type="text" name="resultado" placeholder="ingrese operacion" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] :0;?>">
      </div>
      <div class="col-1 colum">
         <button type="submit" name="numero" value="1">1</button>
         <button type="submit" name="numero" value="4">4</button>
         <button type="submit" name="numero" value="1">1</button>
         <button type="submit" name="numero" value="0">0</button>
      </div>
      <div class="col-1 colum">
         <button type="submit" name="numero" value="8">8</button>
         <button type="submit" name="numero" value="5">5</button>
         <button type="submit" name="numero" value="2">2</button>
         <button class="c" type="submit" name="numero" value="c">C</button>
      </div>
      <div class="col-1 colum">
         <button type="submit" name="numero" value="9">9</button>
         <button type="submit" name="numero" value="6">6</button>
         <button type="submit" name="numero" value="3">3</button>
         <button type="submit" name="numero" value="*">*</button>

      </div>
      <div class="col-1 colum">
         <button type="submit" name="numero" value="+">+</button>
         <button type="submit" name="numero" value="-">-</button>
         <button type="submit" name="numero" value="/">/</button>
         <button class="igual" type="submit" name="numero" value="=">=</button>
      </div>
      <div class="col-1 colum">
         <button type="submit" name="numero" value="←">←</button>
      </div>
      <div class="enviar">
      <input type="submit"value="Enviar">
      </div>
    </div>
</div>
</form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>