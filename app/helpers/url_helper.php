<?php
defined('BASEPATH') or exit('No se permite acceso directo');
    /**Helper url redirect
     * Hace un header location a la pagina que se le pase por parámetros
     * Ejemplo redirect('users/login');
     * @param string $page pagina a redirigir
     * @return void
     *
    **/
    function redirect( $page ){
        header('Location: ' .URL_ROOT . '/' . $page);
    }
    function back()
    {
        $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }
        header("Location:{$previous}");
    }
