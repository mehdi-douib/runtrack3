<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" />
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
    <form>
    <label for='civilite'>Civilite</label>
    <input type='radio' id='monsieur' name='civilite' value='Monsieur'>
    <label for='monsieur'>Monsieur</label>
    <input type='radio' id='madame' name='civilite' value='Madame'>
    <label for='madame'>Madame</label>
    <label for='nom'>Nom:</label>
    <input type='text' id='nom' name='nom'>
    <label for='prenom'>Prenom:</label>
    <input type='text' id='prenom' name='prenom'>
    <label for='mail'>Mail:</label>
    <input type='text' id='mail' name='mail'>
    <label for='adresse'>Adresse:</label>
    <input type='text' id='adresse' name='adresse'>
    <label for='password'>Mot de passe:</label>
    <input type='password' id='password' name='password'>
    <label for='cpassword'> Confirmer mot de passe:</label>
    <input type='password' id='cpassword' name='cpassword'>
    <input type='checkbox' id='informatique' name='informatique'>
    <label for='informatique'>Informatique</label>
    <input type='checkbox' id='voyages' name='voyages'>
    <label for='voyages'>Voyages</label>
    <input type='checkbox' id='sport' name='sport'>
    <label for='sport'>Sport</label>    
    <input type='checkbox' id='lecture' name='lecture'>
    <label for='lecture'>Lecture</label>
    <button type='submit' name='submit'>Envoyer</button>
    </form>
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