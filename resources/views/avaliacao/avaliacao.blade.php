<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title> Avaliacao </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta charset='utf-8'>
  <link rel='stylesheet' type='text/css' media='screen' href="{{asset('css/avaliacao.css')}}">
</head>
<body>
  <form action="" method="POST">
    @csrf
    <h2> Avalie </h2>

    <div id="avaliar"></div>
    <div id="msg"></div>
    <div id="btn"></div>
    <input type="text" name="notas" id="notas" style="display:none;">
    <input type="text" name="idevento" id="idevento" style="display:none;">

  </form>
  <script src="{{asset('js/avaliacao.js')}}"></script>
</body>
</html>
