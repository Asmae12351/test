<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Menu Test</title>
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar1 {
    position: relative; /* Position relative pour le menu absolu */
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #b0633c; /* Couleur de fond de la navbar */
    padding: 10px 20px;
}

.logo i {
    color: white;
    font-size: 23px;
}

.nav-links {
    display: none; /* Masquer le menu par défaut */
    flex-direction: column;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh; /* Prendre toute la hauteur de l'écran */
    width: 100%; /* Prendre toute la largeur de l'écran */
    background-color: #b0633c; /* Couleur de fond */
    padding-top: 60px; /* Espacement pour que le contenu ne soit pas derrière le logo */
    z-index: 999; /* Assurer que le menu est au-dessus des autres éléments */
}

.nav-links.active {
    display: flex; /* Afficher le menu lorsqu'il est actif */
}

.nav-links li {
    text-align: center;
    padding: 20px 0; /* Espacement des éléments du menu */
    list-style: none;
}

.nav-links li a,
.nav-links li button {
    color: white; /* Couleur des liens et boutons */
    font-size: 24px; /* Taille de la police */
    text-decoration: none; /* Pas de soulignement */
    background: none; /* Pas de fond pour le bouton */
    border: none; /* Pas de bordure pour le bouton */
    cursor: pointer; /* Curseur pour les boutons */
}

.menu-icon,
.iconClose {
    cursor: pointer; /* Changer le curseur */
    color: black; /* Couleur des icônes */
    font-size: 30px; /* Taille des icônes */

}

.iconClose {
    display: none; /* Masquer l'icône de fermeture par défaut */
}

/* Responsive */
@media (max-width: 768px) {
    .srch {
        display: none; /* Masquer la barre de recherche sur petits écrans */
    }

.iconClose {
    cursor: pointer; /* Changer le curseur */
    color: black; /* Couleur des icônes */
    font-size: 30px; /* Taille des icônes */

}
}

</style>
<body>
    <nav class="navbar1">
        <div class="logo"><i>ARISANE</i></div>
        <a id="menu"><i class="fa-solid fa-bars" id="menuIcon"></i></a>
        <i id="iconClose" class="fa-solid fa-xmark iconClose"></i>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="Rooms">Rooms</a></li>
            <li><a href="Facilities">Facilities</a></li>
            <li><a href="Contact us">Contact us</a></li>
            <li><a href="About">About</a></li>
            <li><button class="btn1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button></li>
            <li><button class="btn1" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button></li>
        </ul>
    </nav>

    <script >
        document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.getElementById('menu');
    const iconClose = document.getElementById('iconClose');
    const navLinks = document.querySelector('.nav-links');

    // Ouvrir le menu
    menuIcon.addEventListener('click', () => {
        navLinks.classList.add('active'); // Affiche le menu
        menuIcon.style.display = 'none'; // Masque l'icône de menu
        iconClose.style.display = 'block'; // Affiche l'icône de fermeture
    });

    // Fermer le menu
    iconClose.addEventListener('click', () => {
        navLinks.classList.remove('active'); // Masque le menu
        iconClose.style.display = 'none'; // Masque l'icône de fermeture
        menuIcon.style.display = 'block'; // Affiche l'icône de menu
    });
});

    </script>
</body>
</html>
