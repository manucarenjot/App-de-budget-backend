<?php
if (!$_SESSION['connected'] == '1'){
    header('LOCATION: ?c=login');
}
?>
<div id="nav">
    <a href="?c=login&a=logout">Se déconnecter</a>
</div>
<div id="project">
    <h1>Projets</h1>
</div>