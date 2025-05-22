@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <div class="register-container">
        {{-- contenu de register.html ici --}}
        
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.png" alt="logo">
              </div>
              <hr>
              <h4>Vous êtes nouveau ici ?</h4>
              <h6 class="font-weight-light">
                Inscrivez-vous pour commencer votre voyage avec nous!
              </h6>
              <form class="pt-2">
                <div class="row">
                  <div class="col-md-6 form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nom">
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Prénom">
                </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe">
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirmation de mot de passe">
                </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      J'accepte tous les termes et conditions.
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">
                    S'inscrire
                  </a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous avez déjà un compte ? <a href="login.html" class="text-primary">Se connecter</a>
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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Nom</label>
            <input type="text" name="name" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
            <button type="submit">S’inscrire</button>
        </form>
    </div>
@endsection
