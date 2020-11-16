<!DOCTYPE html>
<html>
<head>
  <?php include_once('bootstrap.php')?>
	
  <script type="text/Javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
	</script>
</head>
<body>
	<?php include_once('nav.php')?>
<br>
  <div class="container">
    <h3>Dados do Paciente</h3>
    <ul class="list-group">
      <li class="list-group-item"><?=$paciente['nome_paciente']?></li>
      <li class="list-group-item"><?=$paciente['nome_mae']?></li>
      <li class="list-group-item"><?=$paciente['cpf']?></li>
      <li class="list-group-item"><?=$paciente['cns']?></li>
      <li class="list-group-item"><?=$paciente['cep']?></li>
      <li class="list-group-item"><?= (empty($paciente['rua'])) ? "Não informado": $paciente['rua'] ?></li>
      <li class="list-group-item"><?= (empty($paciente['bairro'])) ? "Não informado": $paciente['bairro'] ?></li>
      <li class="list-group-item"><?= (empty($paciente['cidade'])) ? "Não informado": $paciente['cidade'] ?></li>
      <li class="list-group-item"><?= (empty($paciente['uf'])) ? "Não informado": $paciente['uf'] ?></li>
    </ul>
  </div>
</body>
</html>
