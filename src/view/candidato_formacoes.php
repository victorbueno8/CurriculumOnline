<div class="page-header">
  <h1>Atualizar Dados</h1>
</div>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="?content=2">Dados Pesoais</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Formações</a>
  </li>
</ul>

<form class="form-horizontal" method="POST" action="src/control/atualizar_candidato.php" enctype="multipart/form-data">

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><br />

  			<h4>Formação Acadêmica</h4>
  			<br></div>
        <?php foreach($formacoes as $i => $formacao){?>
  			<div>
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getCurso();?>"></div><br>
  				</div>
  				<div class="col-lg-8">
  					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getInstituicao();?>"></div><br>
  				</div>
  				<div class="col-lg-4">
  					<div class="input-group input-group-md">
  					<select name="status<?php echo $i;?>" class="input-group-addon form-control">
  						<option value=""></option>
  						<option value="concluido" <?php if($formacao->getStatus()=="concluido") echo "selected";?>>Concluído em:</option>
  						<option value="cursando" <?php if($formacao->getStatus()=="cursando") echo "selected";?>>Previsão de concluír:</option>
  					</select>
  					<span class="input-group-btn" style="width:0px;"></span>
  					<input type="text" name="conclusao<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getConclusao();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>
        <div class="col-lg-12">
          <input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#new2').css('display','block');$(this).remove();">
        </div>
  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>

  			<h4>Experiência</h4>
  			<br></div>
        <?php foreach($experiencias as $i => $experiencia){?>
  			<div>
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getEmpresa();?>"></div><br>
  				</div>
  				<div class="col-lg-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getCargo();?>"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getEntrada();?>"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getSaida();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>
        <div class="col-lg-12">
          <input type="button" class="btn btn-primary" value="Adicionar outra experiência" onclick="$('#exp2').css('display','block');$(this).remove();">
        </div>

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>

  			<h4>Idiomas</h4>
  			<br></div>
        <?php foreach($idiomas as $i => $idioma){?>
  			<div>
  				<div class="col-md-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idioma<?php echo $i;?>" class="form-control" value="<?php echo $idioma->getIdioma();?>"></div><br>
  				</div>
  				<div class="col-md-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivel<?php echo $i;?>" class="form-control" value="<?php echo $idioma->getNivel();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>
        <div class="col-md-12">
          <input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outra língua" onclick="$('#lang2').css('display','block');$(this).remove();">
        </div>

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>
  			<h4>Cursos Complementares</h4>
  			<br></div>
        <?php foreach($cursoscompl as $i => $compl){?>
  			<div>
  				<div class="col-md-8">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl<?php echo $i;?>" class="form-control" value="<?php echo $compl->getCursocompl();?>"></div><br>
  				</div>
  				<div class="col-md-4">
  					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl<?php echo $i;?>" class="form-control" value="<?php echo $compl->getHorascompl();?>"></div><br>
  				</div>
  			</div>
        <?php }?>
        <div class="col-md-12">
          <input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#extra2').css('display','block');$(this).remove();">
        </div>

<div class="col-xs-12">
  <hr />
	<input type="submit" name="submitForm" class="btn btn-lg btn-default col-xs-12" role="button">
</div>
</form>
