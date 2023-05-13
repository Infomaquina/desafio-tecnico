<!-- LEIAUTE PADRÃO E SCRIPT -->
<?php $this->layout('layout/main', ['script' => 'result.js']) ?>

<div class="container-fluid" style="max-width: 800px;">
    <!-- CABEÇALHO -->
    <?php require_once('layout/header.php') ?>

    <!-- INPUT PARA BUSCA DE USUARIO -->
    <form method="post">
      <div class="my-3 position-relative">
        <div class="input-group">
          <div class="form-floating">
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="x" required>
            <label for="nome" class="form-label text-secondary"><i class="fa-solid fa-circle-user me-2"></i>GitHub Username</label>
            <div class="invalid-tooltip animate__animated animate__bounceIn text-white" onclick="$('#nome').val('').removeClass('is-invalid')">
                <i class="fa-solid fa-bell fa-shake me-2"></i>Ops! Usuário inválido.
            </div>
          </div>
          <button type="submit" class="btn btn-primary input-group-text rounded-end" onclick="vibrate()">
              <i class="fa-solid fa-magnifying-glass me-2"></i>Buscar
          </button>
        </div>
      </div>
    </form>

    <!-- RESULTADO -->
    <div class="row" id="resultado"></div>
    <br>
</div>
