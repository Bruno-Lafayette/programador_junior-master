<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="View/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Monitoramento de Ramais</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1>Painel de monitoramento de ramal</h1>
        <input id="filter" type="text" placeholder="Pesquisar">
      </div>
      <div class="row">
        <div id="cartoes"></div>
      </div>
    </div>
    <div id="fade" class="hide"></div>
    <div id="modal" class="hide"></div>
    <script src="View/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="View/assets/js/jquery-3.4.1.min.js"></script>
    <script src="View/assets/js/popper.min.js"></script>
    <script src="View/assets/js/bootstrap.min.js"></script>
    <script src="View/assets/js/monitoramento.js"></script>
    <script src="View/assets/js/filtro.js" defer></script>
  </body>
</html>