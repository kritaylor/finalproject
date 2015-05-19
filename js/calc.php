<?php

//global variables to store liquor, beer and wine amounts for calculations

$beerkeg = 165;
$bottlewine = 5;
$liquor = 18;
$casewine = 12;


function totalEvent($guests,$duration){

	$totalDrinks = $guests * $duration;
	return $totalDrinks;

}

function fullBar($totalDrinks){

	//calculate wine at 50%
		$fTotWine = $totalDrinks * .50 / $bootlewine;

	//calculate beer at 20%
		$fTotBeer = $totalDrinks * .20;

	//calculate liquor at 30%
		$fTotLiquor = $totalDrinks * .30;

		return $fTotWine;
		return $fTotLiquor;
		return $fTotBeer;

		echo $fTotBeer;
}


function wineBeer(){

}

?>