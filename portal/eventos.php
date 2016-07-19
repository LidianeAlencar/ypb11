<?php include '../_include/header_portal.php' ?>

<style media="screen">
  .parallax-container {
    min-height: 250px;
    line-height: 0;
    height: auto;
    color: rgba(255,255,255,.9);
  }
</style>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Eventos</h1>
        <div class="row center">
          <h5 class="header col s12 light">A.'.R.'.L.'.M.'. S.'.M.'. YOHESHUA BEN PANDIRA Nº 11</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?= $IMG ?>/banner.png" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 203px, 0px);"></div>
</div>

<?php include '../_include/footer.php' ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();

  });
</script>
