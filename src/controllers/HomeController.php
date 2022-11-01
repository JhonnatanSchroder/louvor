<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LouvorHandler;
use \DateTime;

class HomeController extends Controller {

    public function index() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $bandas = Louvorhandler::getBandas();
        $this->render('home', [
            'flash' => $flash,
            'bandas' => $bandas
        ]);
    }

    public function geradorEscala() {

        if(isset($_SESSION['mes'])){
            $tercas = $_SESSION['tercas'];
            $sextas = $_SESSION['sextas'];
            $domingos = $_SESSION['domingos'];

            $mes = $_SESSION['mes'];
            $cultos = Louvorhandler::ordenarCultos($tercas, $sextas, $domingos);
            $bandas = Louvorhandler::getBandas();

            return $this->render('gerador-escalas', [
            'cultos' => $cultos,
            'bandas' => $bandas,
            'mes' => $mes
        ]);
        } 

        $this->render('gerador-escalas');
    }

    public function geradorEscalaPost() {
        $ano = $_POST['ano'];
        $mes = $_POST['mes'];

        if($ano != "Selecione um ano" && $mes != "Selecione um mês") {

            $_SESSION['tercas'] = Louvorhandler::getDays($ano, $mes, 'tuesday');
            $_SESSION['sextas'] = Louvorhandler::getDays($ano, $mes, 'friday');
            $_SESSION['domingos'] = Louvorhandler::getDays($ano, $mes, 'sunday');

            $_SESSION['mes'] = Louvorhandler::mesFinal($mes);
        }
        $this->redirect('/gerador/escala');
    }

    

}