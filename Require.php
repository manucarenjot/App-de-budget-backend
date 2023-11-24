<?php
require __DIR__.'/routing/Routeur.php';

require __DIR__.'/controllers/AbstractController.php';
require __DIR__.'/controllers/HomeController.php';
require __DIR__.'/controllers/LoginController.php';
require __DIR__.'/controllers/ForgotPasswordController.php';
require __DIR__.'/controllers/ErrorController.php';

require __DIR__.'/model/entity/User.php';
require __DIR__.'/model/manager/UserManager.php';

require __DIR__.'/Engine/Connect.php';