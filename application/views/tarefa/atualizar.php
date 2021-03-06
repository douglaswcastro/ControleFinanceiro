<form action="<?= base_url('tarefa/atualizar')?>" method="post" class="needs-validation" novalidate>

  <div class="form-group">
      <label for="titulo">Título:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $tarefa['titulo']?>" placeholder="Título da tarefa" autofocus/>

      <div id="validacao-titulo" class="validacao badge badge-danger">
        Por favor, informe um título para tarefa.
      </div>
    </div>

    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa" required><?= $tarefa['descricao']?></textarea>
      
      <div id="validacao-descricao" class="validacao badge badge-danger">
        Por favor, informe uma descrição para tarefa.
      </div>
    </div>

    <div class="form-group">
      <label for="prioridade">Prioridade:</label>
      <select name="prioridade" id="prioridade" class="custom-select">
        <option value="" selected disabled>Escolher...</option>
        <option value="1" <?= ($tarefa['prioridade'] == 1) ? "selected" : "";?>>Baixa</option>
        <option value="2" <?= ($tarefa['prioridade'] == 2) ? "selected" : "";?>>Normal</option>
        <option value="3" <?= ($tarefa['prioridade'] == 3) ? "selected" : "";?>>Alta</option>
      </select>

      <div id="validacao-prioridade" class="validacao badge badge-danger">
        Por favor, selecione um nível de prioridade.
      </div>  
    </div>

    <input type="hidden" name="id" value="<?= $tarefa['id']?>"/>

    <button type="submit" class="btn btn-success float-right"><span data-feather="save" class="mr-2"></span>Salvar</button>
</form>

<!-- Validação dos campos -->
<script src="<?=base_url('assets/js/jquery-3.2.1.slim.min.js')?>"></script>
<script>
  $(document).ready(function(){
    $("#titulo").keyup(checar);
    $("#descricao").keyup(checar);
    $("#prioridade").keyup(checar);
  });


  $("button").click(function(){
    var titulo = $("#titulo").val();
    var descricao = $("#descricao").val();
    var prioridade = $("#prioridade").val();

    if (titulo == "" && descricao == "" && !prioridade) {
      $("#titulo").focus();
      $("#titulo").css("border-color", "red");
      $("#validacao-titulo").show();

      $("#descricao").css("border-color", "red");
      $("#validacao-descricao").show();
      
      $("#prioridade").css("border-color", "red");
      $("#validacao-prioridade").show();

      return false;
    }

    if (titulo == "") {
      $("#titulo").focus();
      $("#titulo").css("border-color", "red");
      $("#validacao-titulo").show(); 
      return false;
    }

    if (descricao == "") {
      $("#descricao").focus();
      $("#descricao").css("border-color", "red");
      $("#validacao-descricao").show(); 
      return false;
    }

    if (!prioridade) {
      $("#prioridade").focus();
      $("#prioridade").css("border-color", "red");
      $("#validacao-prioridade").show(); 
      return false;
    }
  });



  function checar() {
    var titulo = $("#titulo").val();
    var descricao = $("#descricao").val();
    var prioridade = $("#prioridade").val();

    if (titulo != "") {
      $("#titulo").css("border-color", "green");
      $("#validacao-titulo").hide(); 
    }

    if (descricao != "") {
      $("#descricao").css("border-color", "green");
      $("#validacao-descricao").hide(); 
    }

    if (prioridade) {
      $("#prioridade").css("border-color", "green");
      $("#validacao-prioridade").hide(); 
    }
  }

</script>