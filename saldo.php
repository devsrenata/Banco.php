<!doctype html>
<html>
<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Banco Ianes</title>
</head>

<body>
  <div class="container-fluid bg1">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><b>BANCO $$$</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deposito.php">Depósito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="saldo.php">Saldo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="saque.php">Saque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="conta.php">Abrir Conta</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" aciton="" method="POST">
          <input class="form-control mr-sm-2" type="text" placeholder="Agência" aria-label="Search" name="agencia">
          <input class="form-control mr-sm-2" type="text" placeholder="Conta Corrente" aria-label="Search" name="conta">
          <input class="form-control mr-sm-2" type="password" placeholder="Senha" aria-label="Search" name="senha">

          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">ENTRAR</button>
        </form>
      </div>
    </nav>
  </div>
  <div class="container">
    <!--sessão um-->
    <section>
        <?php
          include "conecta.php";
          echo"<h5>Data: ".$_SESSION['data']."</h5>";
          echo"<h5>Hora: ".$_SESSION['hora']."</h5>";
          echo "<hr>";

          if(isset($_POST['agencia']) and isset($_POST['conta']) and isset($_POST['senha'])){
            $ag=$_POST['agencia'];
            $conta=$_POST['conta'];
            $senha=md5($_POST['senha']);
/*echo $ag." ".$conta ." ". $senha ;*/
            $sql="SELECT * FROM banco WHERE senha='$senha' AND conta='$conta' AND agencia='$ag'";
            $dados=mysqli_query($chave,$sql);
            $linha=mysqli_fetch_assoc($dados);

            echo "<p>Bem Vindo SR.(a) " . $linha['nome'] . "</p>";
            echo "<p>Agência: " . $linha['agencia'] . "| Conta Corrente: " . $linha['conta'] . "</p>";
            echo "<p>Saldo Atual: R$ " . number_format($linha['saldo'], 2) . "</p>";
          }
        ?>
          <hr>
          <h5>Deseja realizar outra Operação:</h5>
          <div class="d-grid gap-2 col-12 mx-auto">
            <a href="deposito.php" class="btn btn-outline-info" type="button">R$ Depósito</a>
            <a href="SAQUE.php" class="btn btn-outline-secondary" type="button">R$ SAQUE</a>
          </div>
    </section>
    <!--sessão dois-->
    <section>

    </section>
    <!--sessão três-->
    <section>

    </section>
  </div>
  <div class="container-fluid bg-dark">
    <div class="row  bg2">

    </div>
    <div class="row rodape">
      <center>
        <p class=""><b>SUA EMPRESA</b> - Todos os Direitos Reservados | Copyright © 2024.</p>
      </center>  
    </div> 
  </div>
</body>

</html>