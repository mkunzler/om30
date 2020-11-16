

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">OM30</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pacientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url('paciente');?>">Listar Pacientes</a>
          <a class="dropdown-item" href="<?= base_url('paciente/cadastro')?>">Cadastrar Paciente</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
/*
<nav class="blue-grey darken-4">
    <div class="nav-wrapper container">
    <a href="#!" class="brand-logo">OM30</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?= base_url('paciente');?>">Pacientes</a></li>
    </ul>
    </div>
</nav>
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?= base_url('paciente');?>">Pacientes</a></li>
</ul>
*/