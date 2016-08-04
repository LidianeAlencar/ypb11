<?php
    require_once '../config/conexao.class.php';
    require_once '../config/crud.class.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
?>


<?php include '../../_include/header_admin.php' ?>

<div class="section white">
  <div class="row container">
    <h2 class="header">Obreiros</h2>
    <a href="formulario.php" class="waves-effect waves-light btn">Cadastrar</a>
    <br>

    <table class="striped highlight responsive-table bordered">
        <thead>
            <tr>
                <th>Nome Obreiro</th>
                <th>Data Nascimento</th>
                <th>Sexo</th>
                <th>Profissão</th>
                <th>Descrição Profissão</th>
                <th>Grau</th>
                <th>Status</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $consulta = mysql_query("SELECT * FROM obreiro"); // query que busca todos os dados da tabela PRODUTO
                while($campo = mysql_fetch_array($consulta)){ // laço de repetiçao que vai trazer todos os resultados da consulta
            ?>
                <tr>
                    <td><?php echo $campo['nm_obreiro']; ?></td>
                    <td><?php echo $campo['dt_nascimento']; ?></td>
                    <td><?php echo $campo['sx_obreiro']; ?></td>
                    <td><?php echo $campo['nm_profissao']; ?></td>
                    <td><?php echo $campo['ds_profissao']; ?></td>
                    <td><?php echo $campo['nm_grau']; ?></td>
                    <td><?php echo $campo['nm_loja']; ?></td>
                    <td><?php echo $campo['nm_status'];?></td>
                    <td><a href="formulario.php?id=<?php echo $campo['id']; ?>">Editar</a>
                    <td><a href="excluir.php?id=<?php echo $campo['id']; ?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


  </div>
</div>
<?php include '../../_include/footer.php' ?>
<?php $con->disconnect(); // fecha conexao com o banco ?>
