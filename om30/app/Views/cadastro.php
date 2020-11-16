<!DOCTYPE html>
<html>
<head>

    <?php include_once('bootstrap.php')?>

    <!-- Adicionando ViaCEP -->
    <?php include_once('viaCEP.php')?>

	<script type="text/Javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
	</script>
</head>
<body>
	<?php include_once('nav.php')?>
  <div class="container">
	<h3> Cadastro de Paciente</h3>

    <form method='post' action='gravar' enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control-file" id="foto">
      </div>
      <div class="form-group">
        <label for="nome_paciente">Nome Completo do Paciente</label>
        <input type="text" name="nome_paciente" class="form-control" id="nome_paciente">
      </div>
      <div class="form-group">
          <label for="nome_mae">Nome Completo da Mãe</label>
          <input id="nome_mae" type="text" name="nome_mae" class="form-control">
      </div>
      <div class="form-group">
          <label for="data_nasc">Data de Nascimento</label>
          <input id="data_nasc" type="date" name="data_nasc" class="form-control">
      </div>
      <div class="form-group">
          <label for="cpf">CPF</label>
          <input id="cpf" type="text" name="cpf" size="14" class="form-control">
      </div>
      <div class="form-group">
          <label for="cns">CNS</label>
          <input id="cns" type="text" name="cns" class="form-control">
      </div>
      <div class="form-group">
          <label for="cep">CEP</label>
          <input id="cep" type="text" name="cep" class="form-control" size="10" onblur="pesquisacep(this.value)">
      </div>
      <div class="form-group">
          <label for="rua">Rua</label>
          <input id="rua" type="text" name="rua" class="form-control">
      </div>
      <div class="form-group">
          <label for="Bairro">Bairro</label>
          <input id="bairro" type="text" name="bairro" class="form-control">
      </div>
      <div class="form-group">
          <label for="cidade">Cidade</label>
          <input id="cidade" type="text" name="cidade" class="form-control">
      </div>
      <div class="form-group">
          <label for="uf">Estado</label>
          <input id="uf" type="text" name="uf" size="2" class="form-control"> 
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="action">Cadastrar</button>
      </div>
    </form>
  </div>
</body>
</html>
