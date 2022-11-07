<?php 
namespace src\handlers;

use \src\models\Bandas;
use \src\models\Ministros;
use \DateTime;
class LouvorHandler {

	public static function getBandas() {
		$bandas = Bandas::select()->execute();
		return $bandas;
	}

	public static function getBanda($id) {
		$bandas = Bandas::select()->where('id', $id)->execute();

		$newBanda = new Bandas();
		foreach($bandas as $banda){
			$newBanda->name = $banda['name'];
			$newBanda->id = $banda['id'];
 		}
		return $newBanda;
	}

	public static function deleteBanda($id) {
		Bandas::delete()->where('id', $id)->execute();
	}

	public static function getMinistros($id) {
		$ministros = Ministros::select()->where('banda_id', $id)->execute();
		return $ministros;
	}

	public static function getAllMinistros() {
		$ministros = Ministros::select()->execute();
		return $ministros;
	}

	public static function getDays($y, $m, $day) {

		return new \DatePeriod(
			new DateTime("first $day of $y-$m"),
			\DateInterval::createFromDateString("next $day"),
			new DateTime("next month $y-$m-01")
		);
	}

	public static function ordenarCultos($tercas, $sextas, $domingos) {
		$cultos = [];
        foreach($tercas as $terca) {
            $cultos[] = str_replace('Tuesday', 'Terça-feira', $terca->format('d/m l'));
        }
        foreach($sextas as $sexta) {
            $cultos[] = str_replace('Friday', 'Sexta-feira', $sexta->format('d/m l'));
        }
        foreach($domingos as $domingo) {
            $cultos[] = str_replace('Sunday', 'Domingo', $domingo->format('d/m l'));
        }
        natsort($cultos);
        return $cultos;
	}

	public static function mesFinal($m) {
		if($m == 1){
			return 'Janeiro';
		}

		if($m == 2){
			return 'Fevereiro';
		}

		if($m == 3){
			return 'Março';
		}

		if($m == 4){
			return 'Abril';
		}

		if($m == 5){
			return 'Maio';
		}

		if($m == 6){
			return 'Junho';
		}

		if($m == 7){
			return 'Julho';
		}

		if($m == 8){
			return 'Agosto';
		}

		if($m == 9){
			return 'Setembro';
		}

		if($m == 10){
			return 'Outubro';
		}

		if($m == 11){
			return 'Novembro';
		}

		if($m == 12){
			return 'Dezembro';
		}
	}
}