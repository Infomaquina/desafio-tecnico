<?php $this->layout('layout/main', ['script' => 'home.js']) ?>

<div class="container-fluid">
  <div class="row position-relative bg-white" style="z-index:1">
  <!-- TITULO -->
    <div class="col-12 d-flex justify-content-center">
      <div class="card my-5 animate__animated animate__fadeIn" style="max-width: 400px;">
        <div class="card-body text-center">
          <div class="fw-bold">Busca de Usuários do GitHub</div>
          <div class="mt-3">
            <i class="fa-brands fa-github-alt text-secondary fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  <!-- BOTÃO SUBMIT-->
    <div class="col-12 d-flex justify-content-center mt-5 pb-3 add-button animate__flipInX animate__animated">
      <button type="button" class="text-dark btn btn-primary shadow" id="add-app">
        <i class="fa-solid text-white fa-lg fa-download me-2 fa-bounce"></i>
        <span class="h5 text-white">Instalar</span>
      </button>
    </div>
  </div>

<!-- FOOTER -->
  <footer class="position-absolute bottom-0 start-50 translate-middle" style="z-index:0">
    <div class="container text-center text-secondary small text-secondary animate__animated animate__backInDown">POWERED BY</br>
      <a href="https://brandev.tech" target="_blank"><img src="<?=IMG?>logo.jpg" alt="logo" width="40px"></a>
    </div>
  </footer>
</div>