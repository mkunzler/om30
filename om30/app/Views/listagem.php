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
    <h3>Listagem de Pacientes</h3>
      <table class="table table-striped table-bordered">
          <thead>
            <tr>
                <th scope="col">Nome Completo</th>
                <th scope="col">Nome da Mãe</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">CNS</th>
                <th scope="col">Ações</th>
            </tr>
          </thead>

          <tbody>
          <?php foreach($pacientes as $p) : ?>
            <tr>
              <td><?=$p['nome_paciente']?></td>
              <td><?=$p['nome_mae']?></td>
              <td><?= date("d/m/Y", strtotime($p['data_nasc']));?>
              <td><?=$p['cpf']?></td>
              <td><?=$p['cns']?></td>
              <td>
                <form method='post' action='paciente/ver'>
                  <input type="hidden" name="id" value="<?= $p['id']?>"> 
                  <button type="submit"class="btn btn-warning">
                  Visualizar
                  </button>
                </form>
                &nbsp;
                <form method='post' action='paciente/edicao'>
                  <input type="hidden" name="id" value="<?= $p['id']?>"> 
                  <button type="submit"class="btn btn-warning">
                  Editar
                  </button>
                </form>
                &nbsp;
                <form method='post' action='paciente/excluir'>
                  <input type="hidden" name="id" value="<?= $p['id']?>"> 
                  <button type="submit" class="btn btn-danger">
                  Excluir
                  </button>
                </form>
              </td>
              
            </tr>
          <?php endforeach ?>
            
          </tbody>
        </table>
  </div>
</body>
</html>
