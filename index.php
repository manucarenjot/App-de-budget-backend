<?php
session_start();

require __DIR__ . '/Require.php';


if (isset($_GET['home.html.php'])) {
    header('Location: ?c=home');
}
?>
<?php
if (isset($_SESSION['alert']) && count($_SESSION['alert']) > 0) {
    $alerts = $_SESSION['alert'];
    unset($_SESSION['alert']);
    foreach ($alerts as $alert) {
        echo $alert;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/media/52899.png">
    <title>Carenjot Manu</title>
</head>
<body>


<?php
$page = isset($_GET['c']) ? Routeur::secureUrl($_GET['c']) : 'home';
$action = isset($_GET['a']) ? Routeur::secureUrl($_GET['a']) : 'index';

switch ($page) {
    case 'home':
        Routeur::route('HomeController', $action);
        break;
    case 'login':
        Routeur::route('LoginController', $action);
        break;
    default:
        ErrorController::error404($page);
}
?>
<footer>
    <div class="footerMenu"><a href="https://github.com/manucarenjot" title="github" target="_blank">Github</a></div>
    <div class="footerMenu"><a href="?c=about&a=politique" title="Mentions légales">Politique de confidentialité</a>
    </div>
    <div class="footerMenu"><a href="?c=about&a=mention-legales" title="Mentions légales">Mention légales</a></div>
</footer>

<script src="https://kit.fontawesome.com/d8438e7f2f.js" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>
</html>