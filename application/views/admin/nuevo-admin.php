<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ($_POST) {

  @$response_recaptcha = $_POST['g-recaptcha-response'];
  //echo $response_recaptcha;
  if (isset($response_recaptcha) && $response_recaptcha) {
    $secret = "6LdVVJ4UAAAAAIKBcgm4TQ4uGNnjdE4zW4rxRVcf";
    $ip = $_SERVER['REMOTE_ADDR'];
    $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
    if ($validation_server) {
      // (Si recaptcha está Ok...)
      //$this->UM->nuevo($_POST['username'], $_POST['password']);
      $this->UM->nuevo($_POST['username'], $_POST['password']);
      echo '¡Usuario registrado con éxito!';
    } else {
      echo "No se superó el recaptcha.";
    }
  } else {
    echo "No se superó el recaptcha.";
  }
}
$this->load->view('header_view');

?>
<!Doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title><?php echo $titulo; ?></title>
</head>

<body>
  <div class="container">
    <h1><?php echo $current; ?></h1>
    <form action="" method="post">
      <p><label for="username">Username</label></p>
      <p><input type="text" name="username" id="username" placeholder="Username..."></p>
      <p><label for="password">Password</label></p>
      <p><input type="password" name="password" id="password"></p>
      <div class="g-recaptcha" data-sitekey="6LeQV54UAAAAAPzJUMfoeo_IreAzyHC4iRc8lE_y" style="margin-bottom: 15px;"></div>
      <p><input type="reset">Cancelar</p>
      <p><input type="submit">Enviar</p>
    </form>
  </div>
</body>

</html>