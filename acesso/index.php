<?php include '../_include/header.php' ?>


  <div class="row">
    <div class="col s12 m6 l3 offset-l4 ">
      <form class=" login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?= $IMG ?>/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">YBP11 - Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input class="validate" id="usuario" type="text">
            <label for="usuario" data-error="wrong" data-success="right" >Usuário</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" type="password">
            <label for="password">Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Lembrar Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="<?= $URL?>/portal/" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="#">Fazer Cadastro</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="#">Esqueci a Senha</a></p>
          </div>
        </div>

      </form>


    </div>
  </div>

<?php include '../_include/footer.php' ?>
