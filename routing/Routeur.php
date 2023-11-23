<?php
class Routeur
{

    /**Router which is responsible for making the link between the view and the controllers, the switch is used to trigger a
    function corresponding to the second url parameter
     **/

    public static function route(string $controller, ?string $action = null) {
        $control = new $controller();
        $control->index();
        switch ($action) {
            case 'register':
                $control->register();
                break;
            case 'logout':
                $control->logout();
                break;
        }
    }

//Function that secures URL parameters
    public static function secureUrl(?string $param): ?string
    {
        if(null === $param) {
            return null;
        }



        $param = strip_tags($param);
        $param =  trim($param);
        return strtolower($param);
    }
}