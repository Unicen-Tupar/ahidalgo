<?php

require_once('libs/Smarty.class.php');

class adminView{
    private $smarty;
    private $base_url;

    function construct(){
        $this->smarty = new Smarty();
        $this->base_url = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
    }

    function mostrarLogin(){
        $this->smarty->assign('base_url', $this->base_url);
        return $this->smarty->display('templates/login.tpl');
    }

    function registrarse(){
        $this->smarty->assign('base_url', $this->base_url);
        return $this->smarty->display('templates/registrarse.tpl');
    }

    function album(){
        $this->smarty->assign('base_url',$this->base_url);
        $this->smarty->assign('album',$album);
        return $this->smarty->display('templates/index.tpl');
      }
}

?>