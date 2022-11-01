<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Bandas;
use \src\handlers\LouvorHandler;

class BandaController extends Controller {

    public function addBanda() {

        $this->render('adicionar-banda');
    }

    public function addBandaPost() {
        $banda = $_POST['banda'];

        if($banda) {
            Bandas::insert(['name' => $banda])->execute();
            $_SESSION['flash'] = "Nova Banda adicionada";
        }

        $this->redirect('/');
    }

    public function deleteBanda($atts) {
        $id = $atts['id'];

        if($id) {
            Louvorhandler::deleteBanda($id);
            $_SESSION['flash'] = "Banda deletada";
        }

        $this->redirect('/');
    }

    public function editarBanda($atts) {
        $banda = Louvorhandler::getBanda($atts['id']);
        $ministros = Louvorhandler::getMinistros($atts['id']);

        $this->render('editar-banda', [
            'id' => $atts['id'],
            'banda' => $banda,
            'ministros' => $ministros
        ]);
    }


}