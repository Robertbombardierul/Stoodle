<?php

function erore1($value,$msg)
{
    if(isset($_GET['error'])){
        if($_GET['error']==$value){
            echo $msg;
        }
    }
}

function erore2($value,$msg)
{
    if(isset($_GET['error'])){
        if($_GET['error']==$value){
            echo '<div class="alert alert-danger" role="alert">
                '.$msg.'
            </div>';
        }
    }
}
function succes($value,$msg)
{
    if(isset($_GET['succes'])){
        if($_GET['succes']==$value){
            echo '<div class="alert alert-success" role="alert">
                '.$msg.'
            </div>';
        }
    }
}

function binarySearch(Array $arr, $x) 
{ 
	// check for empty array 
	if (count($arr) === 0) return false; 
	$low = 0; 
	$high = count($arr) - 1; 
	
	while ($low <= $high) { 
		
		// compute middle index 
		$mid = floor(($low + $high) / 2); 

		// element found at mid 
		if($arr[$mid] == $x) { 
			return true; 
		} 

		if ($x < $arr[$mid]) { 
			// search the left side of the array 
			$high = $mid -1; 
		} 
		else { 
			// search the right side of the array 
			$low = $mid + 1; 
		} 
	} 
	
	// If we reach here element x doesnt exist 
	return false; 
} 

function comparare_materii($valoare,$valoare_user)
{
  $materii_biologie=array("Chimie","Biologie","Fizica","Matematica");
  $materii_straine=array("Engleza","Franceza","Germana","Spaniola","Latina");
  $materii_matematica=array("Matematica","Fizica","Informatica");
  $materii_informatica=array("TIC","Informatica");
  $materii_antreprenor=array("ATP","Economie","Educatie civica");
  $materii_psihologie=array("Psihologie","Sociologie");
  $materii_geografie=array("Geografie","Istorie");


  if($valoare_user == $valoare)
        return 5;
  elseif(in_array($valoare,$materii_straine) && in_array($valoare_user,$materii_straine))
    return 3;
  elseif(in_array($valoare,$materii_biologie) && in_array($valoare_user,$materii_biologie))
    return 3;
  elseif(in_array($valoare,$materii_matematica) && in_array($valoare_user,$materii_matematica))
    return 3;
  elseif(in_array($valoare,$materii_informatica) && in_array($valoare_user,$materii_informatica))
    return 3;
  elseif(in_array($valoare,$materii_antreprenor) && in_array($valoare_user,$materii_antreprenor))
    return 3;
  elseif(in_array($valoare,$materii_psihologie) && in_array($valoare_user,$materii_psihologie))
    return 3;
  elseif(in_array($valoare,$materii_geografie) && in_array($valoare_user,$materii_geografie))
    return 3;
  else
    return 0;
}

function comparare_profil($valoare,$valoare_user){

  $profile_filo=array("Filologie","Stiinte-sociale");
  $profile_real=array("Mate-info","Stiinte ale naturii");

  if($valoare_user == $valoare)
        return 10;
  elseif(in_array($valoare,$profile_filo) && in_array($valoare_user,$profile_filo))
    return $suma= 5;
  elseif(in_array($valoare,$profile_real) && in_array($valoare_user,$profile_real))
    return 5;
  else
    0;
}

function comparare_judet($valoare,$valoare_user){

  $judet_sud=array("Ilfov","Prahova","Teleorman","Giurgiu","Calarasi","Constanta","Tulcea","Braila","Buzau","Bucuresti","Dambovita","Arges","Valcea","Gorj","Mehedinti","Dolj","Brasov");
  $judet_transilvania=array("Satu-Mare","Maramures","Bihor","Arad","Timis","Caras-Severin","Hunedoara","Alba","Cluj","Salaj","Sibiu","Brasov","Covasna","Harghita","Mures","Bistrita-Nasaud","Cluj");
  $judet_moldova=array("Galati","Vrancea","Bacau","Iasi","Neamt","Suceava","Botosani","Harghita","Brasov","Covasna");


  if($valoare_user == $valoare)
        return 10;
  elseif(in_array($valoare,$judet_sud) && in_array($valoare_user,$judet_sud))
    return 3;
  elseif(in_array($valoare,$judet_transilvania) && in_array($valoare_user,$judet_transilvania))
    return 3;
  elseif(in_array($valoare,$judet_moldova) && in_array($valoare_user,$judet_moldova))
    return 3;
  else
    return 0;
}



function getCompability($array, $user)
{
    $compability_couter = 0;
    $number_imapartire = 100;
    if($user[0]['Domeniu'] == $array['pasiune_facultati'])
        $compability_couter += 8*$user[0]['domeniu_intensitate'];
    if($user[0]['job'] == $array['job'])
        $compability_couter += 5;
    if($user[0]['carti'] == $array['carti'])
        $compability_couter += 5;
    if($user[0]['sociabil'] == $array['sociabil'])
        $compability_couter += 5;
    if($user[0]['sport'] == $array['sport'])
        $compability_couter += 5;
    if($user[0]['stres'] == $array['stres'])
        $compability_couter += 5;

    $compability_couter += comparare_materii($array['materie1'],$user[0]['materie1']);
    $compability_couter += comparare_materii($array['materie2'],$user[0]['materie2']);
    $compability_couter += comparare_materii($array['materie3'],$user[0]['materie3']);

    $compability_couter += comparare_profil($array['Profil'],$user[0]['Profil']);

    $compability_couter += comparare_judet($array['Judet'],$user[0]['Judet']);

    return floor(($compability_couter/$number_imapartire) * 100);
}




?>
