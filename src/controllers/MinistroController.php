<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LouvorHandler;
use \src\models\Ministros;

class MinistroController extends Controller {

    public function addMinistro($atts) {
         $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }


        $this->render('adicionar-ministro', [
            'id' => $atts['id'],
            'flash' => $flash
        ]);
    }

    public function addMinistroPost($atts) {
        $name = $_POST['name'];
        $funcao = $_POST['funcao'];
        $id = $atts['id'];

        if($name && $funcao) {
            Ministros::insert([
                'name' => $name,
                'funcao' => $funcao,
                'banda_id' => $id
            ])->execute();
            $_SESSION['flash'] = "Usuário adicionado";
        }

        $this->redirect('/adicionar/ministro/'.$id);
    }
}