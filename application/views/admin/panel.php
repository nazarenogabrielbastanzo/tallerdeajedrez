<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');

if ($_POST) {
  @$response_recaptcha = $_POST['g-recaptcha-response'];
  //echo $response_recaptcha;
  if (isset($response_recaptcha) && $response_recaptcha) {
    $secret = "6LeQV54UAAAAAM8oVl-uZSf-d4MVc0Gyzg9Ed01Q";
    $ip = $_SERVER['REMOTE_ADDR'];
    $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
    if ($validation_server) {
      // (Si recaptcha está Ok...)
      //$this->UM->nuevo($_POST['username'], $_POST['password']);
      if ($this->UM->verificar($_POST['username'], $_POST['password'])) {
        $_SESSION['user'] = $_POST['username'];
      }
    } else {
      echo "No se superó el recaptcha.";
    }
  } else {
    echo "No se superó el recaptcha.";
  }
}
if (isset($_SESSION['user'])) {
  ?>

  <div class="container">
    <div class="my-5">
      <p>Credenciales OK.</p>
      <p>Username: <em><?= $_SESSION['user']; ?></em>&nbsp;<a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a></p>
      <p><a href="<?= base_url('new-game'); ?>">Nueva partida</a></p>
      <p><a href="<?= base_url('nueva-frase'); ?>">Nueva Frase</a></p>
      <?php
      $visitas = $this->VM->getVisitas()[0]['visitas'];
      $visitasFacebook = $this->VM->getVisitasFacebook()[0]['visitas_facebook'];
      $visitasTotal = $visitas + $visitasFacebook;
      echo "Total de visitas: $visitasTotal";
      ?>
      <div id="piechart" style="width:800px;height:600px;margin:auto;"></div>
    </div>
  </div>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("visualization", "1", {
      packages: ["corechart"]
    });
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Visitas', 'Porciento'],
        ['Directas', <?php echo $visitas; ?>],
        ['Facebook', <?php echo $visitasFacebook; ?>]
      ]);
      var options = {
        title: 'Visitas a Taller de Ajedrez (desde 6 de Mayo de 2019)',
        is3D: true,
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
<?php
} else {
  ?>

  <div class="container-fluid">
    <div class="my-3">
      <p>Credenciales no válidas.</p>
    </div>
  </div>
<?php
}

?>
