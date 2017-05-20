<?php include_once "src/control/curriculos.php";?>
<div class="jumbotron">
  <div class="col-lg-3">
    <div class="thumbnail" style="width: 200px; height: 200px;">
      <img id="foto" src="<?php echo $avatar; ?>" style="width: 200px; height: 190px;">
    </div>
  </div>
  <h3><?php echo $dados->getNomeCompleto();?></h3>
  <?php echo $dados->getNacionalidade();?>, <?php echo $dados->getIdade();?> anos, <?php echo $dados->getEstadoCivil();?><br>
  <?php echo $dados->getEndereco();?><br>
  <?php echo $dados->getCidade();?>, <?php echo $dados->getEstado();?><br>
  Fone: <?php echo $dados->getTelefone();?><br>
  e-mail: <?php echo $dados->getEmail();?><br>
  <?php if(isset($_GET['id'])){ ?>
  <div class="col-lg-offset-9">
    <button class="btn btn-primary" onclick="window.location.href='src/control/atualizar_vaga_candidato.php?id=<?php echo $_GET['id'];?>'">
      <span class="glyphicon glyphicon-plus"></span> Selecionar Candidato
    </button>
  </div>
  <?php } ?>
</div>

<div class="row">

  <div class=" col-lg-12"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#objContent" data-toggle="collapse">Objetivo</a>
      </h4>
    </div>
    <div id="objContent" class="panel-body collapse in"> <?php echo $dados->getObjetivo();?>
    </div>
  </div></div>

  <div class=" col-lg-6"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#forContent" data-toggle="collapse">Formação Acadêmica</a>
      </h4>
    </div>
    <ul class="list-group" id="forContent" class="collapse in">
      <?php foreach($formacoes as $formacao){?>
        <li class="list-group-item">
        Curso: <?php echo $formacao->getCurso();?><br>
        Instituição: <?php echo $formacao->getInstituicao();?><br>
        <?php echo $formacao->getStatus();?>: <?php echo $formacao->getConclusao();?><br>
        </li>
      <?php }?>
    </ul>
  </div></div>

  <div class=" col-lg-6"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#expContent" data-toggle="collapse">Experiência Profissional</a>
      </h4>
    </div>
    <ul class="list-group" id="expContent" class="collapse in">
      <?php foreach($experiencias as $experiencia){?>
        <li  class="list-group-item">
        Empresa: <?php echo $experiencia->getEmpresa();?><br>
        Cargo: <?php echo $experiencia->getCargo();?><br>
        Entrada em: <?php echo $experiencia->getEntrada();?><br>
        Saída em: <?php echo $experiencia->getSaida();?><br>
        </li>
      <?php }?>
    </ul>
  </div></div>

  <div class="clearfix visible-lg"></div>

  <div class=" col-lg-6"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#idContent" data-toggle="collapse">Idiomas</a>
      </h4>
    </div>
    <ul class="list-group" id="idContent" class="collapse in">
      <?php foreach($idiomas as $idioma){?>
        <li  class="list-group-item">
        <?php echo $idioma->getIdioma();?> <?php echo $idioma->getNivel();?>
        </li>
      <?php }?>
    </ul>
  </div></div>

  <div class=" col-lg-6"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#curContent" data-toggle="collapse">Cursos Complementares</a>
      </h4>
    </div>
    <ul class="list-group" id="curContent" class="collapse in">
      <?php foreach($cursoscompl as $curso){?>
        <li  class="list-group-item">
        Curso: <?php echo $curso->getCursocompl();?><br>
        Horas: <?php echo $curso->getHorascompl();?><br>
        </li>
      <?php }?>
    </ul>
  </div></div>

  <div class=" col-lg-12"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#infoContent" data-toggle="collapse">Informações Adicionais</a>
      </h4>
    </div>
    <div id="infoContent" class="panel-body collapse in"> <?php echo $dados->getInfo_adicional();?>
    </div>
  </div></div><br>

</div>
