<?php
    class viewConnexion
    {
        public function __construct(){}

        public function displayConnexion()
        {
            ?>

            <section>
                
            <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="index.php?view=connexion&action=inputConnexion" method="post">
              <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
              <p class="text-white-50 mb-5">Entrez votre Email et Mot de passe !</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Mot de Passe</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Mot de Passe Oublié ?</a></p>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Connexion</button>
              </form>


            </div>

            <div>
              <p class="mb-0">Pas de compte ? <a href="index.php?view=connexion&action=register" class="text-white-50 fw-bold">S'enregistrer</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

            </section>

            <?php
        }

        public function displayRegister()
        {
            ?>
            <br><br>
            <section>
            <div class="mask d-flex align-items-center h-100">

    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-dark text-light" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Créer un Compte</h2>

              <form action="index.php?view=connexion&action=inputRegister" method="POST">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example1cg" >Prénom</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example1cg">Nom</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="password1" name="password1" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example4cg">Mot de Passe</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="password2" name="password2" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example4cdg">Confirmer Mot de Passe</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required/>
                  <label class="form-check-label" for="form2Example3g">
                    J'ai lu et j'accepte les <a href="index.php#" class="text-light" target="_blank"><u>Conditions Générales d'Utilisation</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">S'enregistrer</button>
                </div>

                <p class="text-center mt-5 mb-0 text-light">Déjà un compte ? <a href="index.php?view=connexion&action=connexion"
                    class="text-light fw-bold "><u>Connexion</u></a></p>
            <?php
              
                
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
            </section>

            <?php
        }
    }