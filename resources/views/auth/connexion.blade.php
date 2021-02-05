@extends('layouts/app', ['title' => 'Authentification'])

@section('content')

    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form action="#" class="sign-in-form">
              <h2 class="title">Connexion</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
              </div>
              <input type="submit" value="Login" class="btn solid" />
              <p class="social-text"><a href="{{ route('accueil') }}">Ou connectez-vous avec les plateformes sociales</a></p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
            <form action="#" class="sign-up-form">
              <h2 class="title">inscription</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom" />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
              </div>
              <input type="submit" class="btn" value="Sign up" />
              <p class="social-text">Ou connectez-vous avec les plateformes sociales</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </div>
        </div>

        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Salut l'ami!</h3>
              <p>
                Entrez vos informations personnelles et commencez votre voyage avec nous.
              </p>
              <button class="btn transparent" id="sign-up-btn">
                inscription
              </button>
            </div>
            <img src="{{ asset('img/Messaging_vert.svg') }}" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>Bon Retour !</h3>
              <p>
                Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Connexion
              </button>
            </div>
            <img src="{{ asset('img/testing_vert.svg') }}" class="image" alt="" />
          </div>
        </div>
      </div>



@endsection
 