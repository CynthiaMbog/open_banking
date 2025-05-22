@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <div class="login-container">
        {{-- Mets ici le contenu HTML du <body> de login.html --}}

        
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.png" alt="logo">
              </div>
              <hr>
              <h4>Bienvenue</h4>
              <h6 class="font-weight-light">A Open Banking votre plateforme fiable et sécurisée</h6>
              <form class="pt-2">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">
                    Se connecter
                  </a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous n'avez pas de compte ? <a href="register.html" class="text-primary">S'inscrire</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>
@endsection
