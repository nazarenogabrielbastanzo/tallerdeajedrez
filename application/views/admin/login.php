<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
?>
<body>
    <div class="container">
        <div class="my-5">
            <div class="card">
                <div class="card-header">
                    <?= $titulo ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <p class="card-text">Ingrese los datos solicitados a continuación.</p>
                    <form action="<?= base_url('panel') ?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"  aria-describedby="emailHelp" placeholder="Username...">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdgZ2AUAAAAAMNVpH5OrhPZA6NQYTh8zGJbGqmh" style="margin-bottom: 15px;"></div>
                        <button type="submit" class="btn btn-primary" id="enviar">Entrar</button>
                        <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var btnCancelar = document.querySelector('#cancelar');
        btnCancelar.addEventListener('click', () => {
            window.location.assign('<?= base_url(index_page()); ?>');
        });
    </script>
</body>
</html>
