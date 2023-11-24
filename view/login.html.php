<?php
?>
<div>
    <video id="background-video" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="/assets/medias/ink_-_27915%20(540p).mp4" type="video/mp4">
    </video>
</div>

<div id="connection">

    <h1>Connexion</h1><br>
    <form method="post" action="?c=login" id="loginForm">
        <label for="mail">Adresse e-mail :</label>
        <br>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre adresse mail" required>
        <br>
        <label for="password">Mot de passe :</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
        <br>
        <input type="submit" name="login" id="login">
        <br>
        <a href="?c=forgot-password">Mot de passe oublié ?</a>
    </form>
</div>
<br>
<br><br>
<div id="Register">
    <h1>inscription</h1>
    <form action="?c=login&a=register" method="post" id="registerForm">
        <label for="mail">Adresse e-mail :</label>
        <br>
        <input type="email" name="mail" id="mail" required>
        <br>
        <label for="username">Nom d'utilisateur :</label>
        <br>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password :</label>
        <br>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="send" id="send" required>
    </form>
</div>