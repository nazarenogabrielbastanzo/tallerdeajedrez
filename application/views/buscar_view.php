<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div class="container mb-5"
  style="margin-top: 150px; background-color: white;">
  <h4 style="text-align: center;"
    class="mb-5">
    <?php echo $current; ?>
  </h4>
  <form action="<?php echo base_url('resultados-busqueda'); ?>" method="GET">
    <div class="input-group input-group-lg">
      <input type="search"
        class="form-control"
        aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-lg"
        style="text-align: center;"
        name="PalabraClave"
        autocomplete="off"
        required>
      <button type="submit"
        class="btn btn-outline-primary">Buscar</button>
    </div>
  </form>
</div>

<?php
$this->load->view('footer_view');
?>
