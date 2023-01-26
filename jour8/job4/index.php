<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
    <nav>
    <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down">
    <li><a href='index.php'>Accueil</a></li>
    <li><a href='index.php'>Inscription</a></li>
    <li><a href='index.php'>Connexion</a></li>
    <li><a href='index.php'>Rechercher</a></li>
    </ul>
    </div>
    </nav>
    </header>
    <main>
    <section>
    <div class="row">
    <form class="col s12">
    <p>
      <label>
        <input name="monsieur" type="radio"  />
        <span>Monsieur</span>
      </label>
    </p>
    <p>
      <label>
        <input name="madame" type="radio"  />
        <span>Madame</span>
      </label>
    </p>
    <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nom</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Prenom</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">contact_mail</i>
          <input id="mail" type="text" class="validate">
          <label for="mail">Mail</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">home</i>
          <input id="adress" type="text" class="validate">
          <label for="adress">Adress</label>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div></div>  
      <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="cpassword" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class='row'>
      <p>
      <label for='informatique'>
        <input type="checkbox" id='informatique'/>
        <span>Informatique</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Voyages</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Sport</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Lecture</span>
      </label>
    </p>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer</button>
    </form>
    </div>
    </section>
    </main>
    <footer>
    <nav>
    <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down">
    <li><a href='index.php'>Accueil</a></li>
    <li><a href='index.php'>Inscription</a></li>
    <li><a href='index.php'>Connexion</a></li>
    <li><a href='index.php'>Rechercher</a></li>
    </ul>
    </div>
    </nav>
    </footer>
</body>
</html>