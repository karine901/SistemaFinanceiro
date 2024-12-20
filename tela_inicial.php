<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial - Sistema de Lançamento</title>

    <style>
        body {
             background: linear-gradient(135deg, #72EDF2 10%, #5151E5 100%);;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 10%;
            padding: 40px;
            background-color: rgba(71, 0, 138, 0.1);
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #f8f9fa;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            color: #f6fbff;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn {
            padding: 15px 30px;
            font-size: 1.1rem;
            border-radius: 8px;
            width: 250px;
        }
        .btn-dark {
            background-color: #8d68e4;
            border-color: #7e37cf;
            color: #f8f9fa;
        }
        .btn-dark:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container text-center text-light">
        <h1>Seja bem-vindo ao Sistema de Lançamento</h1>
        <p>Escolha uma opção para iniciar</p>
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            <a href="cadastro_categoria.html">
                <button type="button" class="btn btn-dark">Cadastrar Categoria</button>
            </a>
            <a href="cadastro_lancamento.html">
                <button type="button" class="btn btn-dark">Realizar Lançamento</button>
            </a>
        </div>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DlMNPR9xGyY4iZPtuD5O5qb60bbl" crossorigin="anonymous"></script>

<div style="">
  <?php
  if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    echo "Olá $id";
  } 
  
  ?>
</body>
</html>
 

 
