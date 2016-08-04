<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>YBP 11</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= $CSS ?>/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= $CSS ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  <script>
    var OneSignal = OneSignal || [];
    OneSignal.push(["init", {
      appId: "3f68a2ba-3fd5-4534-ba91-3e9a614f158e",
      autoRegister: false, /* Set to true to automatically prompt visitors */
      subdomainName: 'https://ybp11.onesignal.com',
      notifyButton: {
          enable: true /* Set to false to hide */
      }
    }]);


    OneSignal.push(["getUserId", function(userId) {
    console.log("OneSignal User ID:", userId);
    // (Output) OneSignal User ID: 270a35cd-4dda-4b3f-b04e-41d7463a2316
}]);
  </script>
</head>
<body >
  <nav class="light-blue l?ighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?= $URL ?>/portal/">Inicio</a></li>
        <li><a href="<?= $URL ?>/portal/obreiros.php">Obreiros</a></li>
        <li><a href="<?= $URL ?>/portal/aniversariantes.php">Aniversário</a></li>
        <li><a href="<?= $URL ?>/portal/calendario.php">Calendário</a></li>
        <li><a href="<?= $URL ?>/portal/hospitalaria.php">Hospitalaria</a></li>
        <li><a href="<?= $URL ?>/portal/eventos.php">Eventos</a></li>
        <li><a href="<?= $URL ?>/portal/documentos.php">Documentos</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?= $URL ?>/portal/">Inicio</a></li>
        <li><a href="<?= $URL ?>/portal/obreiros.php">Obreiros</a></li>
        <li><a href="<?= $URL ?>/portal/aniversariantes.php">Aniversário</a></li>
        <li><a href="<?= $URL ?>/portal/calendario.php">Calendário</a></li>
        <li><a href="<?= $URL ?>/portal/hospitalaria.php">Hospitalaria</a></li>
        <li><a href="<?= $URL ?>/portal/eventos.php">Eventos</a></li>
        <li><a href="<?= $URL ?>/portal/documentos.php">Documentos</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
