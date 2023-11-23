<?php

class LoginController extends AbstractController
{
    public function index()
    {
        $this->render('login');
        if (isset($_POST['login'])) {
            $mail = htmlentities($_POST['mail']);
            $password = htmlentities($_POST['password']);
            $alert = [];
            $referer = $_SERVER['HTTP_REFERER'] ?? 'home.php';

            if (empty($mail) or empty($password)) {
                $alert[] = '<div class="alert-error">un champs n\'a pas été remplis</div>';
            }

            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $alert[] = '<div class="alert-error">l\'adresse email est invalide</div>';
            }

            if (count($alert) > 0) {
                $_SESSION['alert'] = $alert;
                header('LOCATION: '.$referer);
            }

            UserManager::ConnectUser($mail, $password);
        }

    }

    public function register() {
        if (isset($_POST['send'])) {
            $mail = htmlentities($_POST['mail']);
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);
            $code = (new DateTime())->format('mHdsiY') . uniqid();

            $password = password_hash($password, PASSWORD_DEFAULT);

            $user = new User();

            $user
                ->setMail($mail)
                ->setPassword($password)
                ->setUsername($username)
                ->setCode($code)
            ;

            UserManager::addUser($user);
        }
    }

    public function logout() {
        ob_start();
        require __DIR__ . '/../View/logout.html.php';
    }
}
?>