<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Controle Financeiro</a>
  <div class="col-md-3" style="text-align: right;">
    <div class="row">
      <ul class="navbar-nav px-5">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('usuario/perfil')?>"><span data-feather="user"></span> Olá, <?= $this->session->userdata['nome']?></a>          
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('login/logout') ?>"><span data-feather="log-out"></span> Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 

 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard') ?>">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard') ?>">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?= base_url('tarefa') ?>">
                <span data-feather="list"></span>
                Minhas contas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('tarefa/cadastro') ?>">
                <span data-feather="plus"></span>
                Cadastrar
            </a>
          </li>
        </ul>
      </div>
    </nav>