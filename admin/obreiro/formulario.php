  <?php
      require_once '../config/conexao.class.php';
      require_once '../config/crud.class.php';

      $con = new conexao(); // instancia classe de conxao
      $con->connect(); // abre conexao com o banco
      @$getId = $_GET['id'];  //pega id para ediçao caso exista
      if(@$getId){ //se existir recupera os dados e tras os campos preenchidos
          $consulta = mysql_query("SELECT * FROM obreiro WHERE id = + $getId");
          $campo = mysql_fetch_array($consulta);
      }

      if(isset ($_POST['cadastrar'])){  // caso nao seja passado o id via GET cadastra
          $nm_obreiro	 = $_POST['nm_obreiro'];  //pega o elemento com o pelo NAME
          $dt_nascimento	 = $_POST['dt_nascimento'];  //pega o elemento com o pelo NAME
          $sx_obreiro	 = $_POST['sx_obreiro'];  //pega o elemento com o pelo NAME
          $nm_profissao	 = $_POST['nm_profissao'];  //pega o elemento com o pelo NAME
          $ds_profissao	 = $_POST['ds_profissao'];  //pega o elemento com o pelo NAME
          $nm_grau	 = $_POST['nm_grau'];  //pega o elemento com o pelo NAME
          $nm_loja	 = $_POST['nm_loja'];  //pega o elemento com o pelo NAME
          $nm_status	 = $_POST['nm_status'];  //pega o elemento com o pelo NAME
          $crud = new crud('obreiro');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
          $crud->inserir("nm_obreiro,dt_nascimento,sx_obreiro,nm_profissao,ds_profissao,nm_grau,nm_loja,nm_status",
          "'$nm_obreiro','$dt_nascimento','$sx_obreiro','$nm_profissao','$ds_profissao','$nm_grau','$nm_loja','$nm_status'"); // utiliza a funçao INSERIR da classe crud
          header("Location: index.php"); // redireciona para a listagem
      }

      if(isset ($_POST['editar'])){ // caso  seja passado o id via GET edita
          $nm_obreiro	 = $_POST['nm_obreiro'];  //pega o elemento com o pelo NAME
          $dt_nascimento	 = $_POST['dt_nascimento'];  //pega o elemento com o pelo NAME
          $sx_obreiro	 = $_POST['sx_obreiro'];  //pega o elemento com o pelo NAME
          $nm_profissao	 = $_POST['nm_profissao'];  //pega o elemento com o pelo NAME
          $ds_profissao	 = $_POST['ds_profissao'];  //pega o elnm_status='$nm_status'emento com o pelo NAME
          $nm_grau	 = $_POST['nm_grau'];  //pega o elemento com o pelo NAME
          $nm_loja	 = $_POST['nm_loja'];  //pega o elemento com o pelo NAME
          $nm_status	 = $_POST['nm_status'];  //pega o elemento com o pelo NAME
          $crud = new crud('obreiro'); // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
          $crud->atualizar("nm_obreiro='$nm_obreiro',dt_nascimento='$dt_nascimento',
          sx_obreiro='$sx_obreiro',nm_profissao='$nm_profissao',ds_profissao='$ds_profissao',
          nm_grau='$nm_grau',nm_loja='$nm_loja',nm_status='$nm_status'", "id='$getId'"); // utiliza a funçao ATUALIZAR da classe crud
          header("Location: index.php"); // redireciona para a listagem
      }

  ?>



  <?php include '../../_include/header_admin.php' ?>

  <div class="section white">
    <div class="row container">
      <h2 class="header">Obreiros - Cadastrar</h2>
      <br>

  <div class="row">
          <form action="" method="post">
  <!--
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div -->

  <div class="input-field col s6">
    <input type="text" name="nm_obreiro" value="<?php echo @$campo['nm_obreiro']; ?>" />
    <label>Nome:</label>
  </div>

<div class="input-field col s6">
   <label>Data Nascimento:</label>
   <input type="text" name="dt_nascimento" value="<?php echo @$campo['dt_nascimento']; ?>" />
</div>

<div class="input-field col s6">
  <label>Sexo:</label>
  <input type="text" name="sx_obreiro" value="<?php echo @$campo['sx_obreiro']; ?>" />
</div>

<div class="input-field col s6">
  <label>Profissão:</label>
  <input type="text" name="nm_profissao" value="<?php echo @$campo['nm_profissao']; ?>" />
</div>

<div class="input-field col s6">
  <label>Sobre a Profissão:</label>
   <textarea id="textarea1" class="materialize-textarea" name="ds_profissao" value="<?php echo @$campo['ds_profissao']; ?>"></textarea>
</div>

<div class="input-field col s6">
  <label>Grau:</label>
  <input type="text" name="nm_grau" value="<?php echo @$campo['nm_grau']; ?>" />
</div>

<div class="input-field col s6">
  <label>Status:</label>
  <input type="text" name="nm_status" value="<?php echo @$campo['nm_status']; ?>" />
</div>

<div class="input-field col s6">
    <label>Loja:</label>
    <input type="text" name="nm_loja" value="<?php echo @$campo['nm_loja']; ?>" />
</div>

              <?php
                  if(@!$campo['id']){ // se nao passar o id via GET nao está editando, mostra o botao de cadastro
              ?>
                  <input type="submit" name="cadastrar" value="Cadastrar" class="waves-effect waves-light btn" />
              <?php }else{ // se  passar o id via GET  está editando, mostra o botao de ediçao ?>
                  <input type="submit" name="editar" value="Editar" class="waves-effect waves-light btn"/>
              <?php } ?>
          </form>
        </div>
  <?php $con->disconnect(); // fecha conexao com o banco ?>
  <script type="text/javascript">
  $(document).ready(function() {
     Materialize.updateTextFields();
   });
  </script>
<?php include '../../_include/footer.php' ?>
