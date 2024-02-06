<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">



<title> 
  
*
?
  
  
  
  CREATY_240205_1245a
  
  </title>
  
<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.js"></script>


<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


<style>

html * { font-family:"PT Mono", monospace; font-weight:600; }

body{margin-left:3.000rem; margin-right:0.000rem; }
article{padding-right:2.50rem; overflow:auto;}

</style>

</head>

<body>

<section style="position:fixed; top:12.5%; left:0%;">
<a href="#" class="ui mini button">/\</a>
<br>
<a href="#fine" class="ui mini button">\/</a>
</section>



<section style="background-color:orange; color:black; " class="ui center aligned segment">
<article class="ui comments" >
 <div class="comment">
	<div class="content">
	<a href="https://www.rinaldo-rasa.it/funicoty07/creaty.php" style="font-variant:small-caps;" class="author">rinaldo rasa &copy; 2024</a>
		<div  style="font-variant:small-caps;" class="text">
		CREATY_240205_1245a <span style="background-color:white; color:green;">Utility per clonare una cartella funicotynn</span>
		</div>
	</div>
 </div>
</article>
</section>




<div class="ui placeholder segment">
  <div class="ui two column very relaxed stackable grid">


    <div class="column">
      <form class="ui form" action="creaty.php"  method="POST">
			<div class="field">
				<label>Username</label>
				<div class="ui left icon input">
					<input id="UTENTE" name="UTENTE"type="password" placeholder="">
					<i class="user icon"></i>
				</div>
			</div>
		
			<div class="field">
				<label>Password</label>
				<div class="ui left icon input">
					<input id="PASSWORD" name="PASSWORD" type="password">
					<i class="lock icon"></i>
				</div>
			</div>
			<input class="ui blue submit button" type="submit" value="Login">  
		
      </form>
    </div>
	
    <div style="background-color:orange; color:black;" class="column">	
		<a href="https://www.rinaldo-rasa.it/funicoty07/creaty.php" class="ui red button">exit</a>
		<article class="ui orange segment">
		<i class="exclamation big red triangle icon"></i>
		Il programma esegue una clonazione di creaty. 
		Se non sai esattamente cosa stai facendo fai click su <q>exit</q>.
		</article>
		<blockquote>
		In alternativa aprire un editor e cambiare Origine e Destinazione.
		</blockquote>
	</div>

	
  </div>
</div>



<main class="ui white segment">


<?php 


//
// ASSEGNA NOMI DIR
//
//
// origine e destinazione
// sono due variabile alle
// quali va assegnato un 
// valore strategico
// 
// nel case study si considera
// per default una sottodirectory
// immediatamente inferiore alla radice
// rappresentata da ../
// in altri casi occorre fare un test
// e affrontare un altro case study
//

$ORIGINA_DIR='../funicoty07/';
$DESTINA_DIR='../funicoty08/';

echo '<br>' . '<span class="ui label">Origine:      </span>' . $ORIGINA_DIR ;
echo '<br>' . '<span class="ui label">Destinazione: </span>' . $DESTINA_DIR ;

// /\
// ||
// || questi due valori sono molto critici
// || 
// ||
// ||
// ||
// ||
// ||
// ||
// --

// $root = $_SERVER['DOCUMENT_ROOT'];
$root = getcwd();
echo '<br>' . '<span class="ui label">Posizione attuale: </span>' . $root ;



include('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php');


$VAI=0;

$UTENTE_NOW = $_POST["UTENTE"];
$PASSWORD_NOW = $_POST["PASSWORD"];

$CONTROLLO_NOW = $_POST["CONTROLLO"];


$THE_BIG_CODE=1;





if( ($UTENTE_NOW===$UTENTE)  and ($PASSWORD_NOW===$PASSWORD) )
{
	echo '';
	
	$VAI=1;
	
}else{
	
	echo '';
	
	$VAI=0;
};


if($VAI===1){


// ||
// || DEFINIZIONE E ASSEGNAZIONE DELLE VARIABILI
// ||
// ||
// \/

$NULLA='';


//
// ASSEGNA NOMI DIR
//
//
// origine e destinazione
// sono due variabile alle
// quali va assegnato un 
// valore strategico
// 
// nel case study si considera
// per default una sottodirectory
// immediatamente inferiore alla radice
// rappresentata da ../
// in altri casi occorre fare un test
// e affrontare un altro case study
//
// 
// $ORIGINA_DIR='../funicoty07/';
// $DESTINA_DIR='../funicoty08/';
// 
// /\
// ||
// || questi due valori sono molto critici
// || 
// ||
// ||
// ||
// ||
// ||
// ||
// --









if($THE_BIG_CODE===1){

$ORIGINA_DIR_DLB = $ORIGINA_DIR . 'dlb/';              $DESTINA_DIR_DLB = $DESTINA_DIR . 'dlb/';
$ORIGINA_DIR_CIF = $ORIGINA_DIR . 'w_a_0_0_cifrato/';  $DESTINA_DIR_CIF = $DESTINA_DIR . 'w_a_0_0_cifrato/';
$ORIGINA_DIR_DEC = $ORIGINA_DIR . 'w_a_0_0_decifra/';  $DESTINA_DIR_DEC = $DESTINA_DIR . 'w_a_0_0_decifra/';
$ORIGINA_DIR_NOY = $ORIGINA_DIR . 'w_a_0_0_noyek/';    $DESTINA_DIR_NOY = $DESTINA_DIR . 'w_a_0_0_noyek/';
$ORIGINA_DIR_COM = $ORIGINA_DIR . 'w_a_0_0_commenti/'; $DESTINA_DIR_COM = $DESTINA_DIR . 'w_a_0_0_commenti/';


$ORIGINA_DIR_DLB_A = $ORIGINA_DIR_DLB . 'a/';                   $DESTINA_DIR_DLB_A   = $DESTINA_DIR_DLB . 'a/';
$ORIGINA_DIR_DLB_B = $ORIGINA_DIR_DLB . 'b/';                   $DESTINA_DIR_DLB_B   = $DESTINA_DIR_DLB . 'b/';
$ORIGINA_DIR_NOY_PLA = $ORIGINA_DIR_NOY . 'w_a_0_0_platform/';  $DESTINA_DIR_NOY_PLA = $DESTINA_DIR_NOY . 'w_a_0_0_platform/';
$ORIGINA_DIR_NOY_SAV = $ORIGINA_DIR_NOY . 'w_a_0_0_savecif/';   $DESTINA_DIR_NOY_SAV = $DESTINA_DIR_NOY . 'w_a_0_0_savecif/';
$ORIGINA_DIR_NOY_YEK = $ORIGINA_DIR_NOY . 'w_a_0_0_yek/';       $DESTINA_DIR_NOY_YEK = $DESTINA_DIR_NOY . 'w_a_0_0_yek/';



//
// ASSEGNA NOMI FIL
//


$ORIGINA_FIL_INDEX      = $ORIGINA_DIR. 'index.html';         $DESTINA_FIL_INDEX    = $DESTINA_DIR. 'index.html';
$ORIGINA_FIL_FUNICOTY   = $ORIGINA_DIR. 'funicoty07.php';     $DESTINA_FIL_FUNICOTY = $DESTINA_DIR. 'funicoty08.php';
$ORIGINA_FIL_001        = $ORIGINA_DIR. 'SALVATAGGIOCIF.php'; $DESTINA_FIL_001      = $DESTINA_DIR. 'SALVATAGGIOCIF.php';
$ORIGINA_FIL_002        = $ORIGINA_DIR. 'creaty.php';         $DESTINA_FIL_002      = $DESTINA_DIR. 'creaty.php';
$ORIGINA_FIL_003        = $ORIGINA_DIR. 'LeggiCIF.php';       $DESTINA_FIL_003      = $DESTINA_DIR. 'LeggiCIF.php';
					    


					    
					    
$ORIGINA_FIL_DLB_A001   = $ORIGINA_DIR_DLB_A . 'login.php';   $DESTINA_FIL_DLB_A001 = $DESTINA_DIR_DLB_A . 'login.php';
$ORIGINA_FIL_DLB_A002   = $ORIGINA_DIR_DLB_A . 'logout.php';  $DESTINA_FIL_DLB_A002 = $DESTINA_DIR_DLB_A . 'logout.php';
					    
$ORIGINA_FIL_DLB_B001   = $ORIGINA_DIR_DLB_B . 'test.php'; $DESTINA_FIL_DLB_B001 = $DESTINA_DIR_DLB_B . 'test.php';

// 
$ORIGINA_FIL_NOY001     = $ORIGINA_DIR_NOY . 'w_a_0_0_wate.php'; 
$DESTINA_FIL_NOY001     = $DESTINA_DIR_NOY . 'w_a_0_0_wate.php'; 

// 
$ORIGINA_FIL_NOY_PLA001 = $ORIGINA_DIR_NOY_PLA . 'index.js';
$DESTINA_FIL_NOY_PLA001 = $DESTINA_DIR_NOY_PLA . 'index.js';

// 
$ORIGINA_FIL_NOY_SAV001 = $ORIGINA_DIR_NOY_SAV . 'savecif.php';
$DESTINA_FIL_NOY_SAV001 = $DESTINA_DIR_NOY_SAV . 'savecif.php';

// 
$ORIGINA_FIL_NOY_YEK001 = $ORIGINA_DIR_NOY_YEK . 'w_a_0_0_yek.php';
$DESTINA_FIL_NOY_YEK001 = $DESTINA_DIR_NOY_YEK . 'w_a_0_0_yek.php';

// 
$ORIGINA_FIL_NOY_YEK002 = $ORIGINA_DIR_NOY_YEK . 'w_a_0_0_stello.php';
$DESTINA_FIL_NOY_YEK002 = $DESTINA_DIR_NOY_YEK . 'w_a_0_0_stello.php';


// 
$ORIGINA_FIL_COM001 = $ORIGINA_DIR_COM . 'w_a_0_0_PAGINA.htm';
$DESTINA_FIL_COM001 = $DESTINA_DIR_COM . 'w_a_0_0_PAGINA.htm';

// 
$ORIGINA_FIL_COM002 = $ORIGINA_DIR_COM . 'w_a_0_0_RESTAYLING.html';
$DESTINA_FIL_COM002 = $DESTINA_DIR_COM . 'w_a_0_0_RESTAYLING.html';





// ||
// || CREAZIONE E VISUALIZZAZIONE DIRECTORY
// ||
// \/


echo '<article  style="color:navy;" class="ui blue segment">';


//
// VISUALIZZA DIR
//


echo '<br>' . '<u>Directory sorgente: </u>';

echo '<br>' . $ORIGINA_DIR          ;if(is_Dir($ORIGINA_DIR)){     mkdir($DESTINA_DIR);     echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_DLB      ;if(is_Dir($ORIGINA_DIR_DLB)){ mkdir($DESTINA_DIR_DLB); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_CIF      ;if(is_Dir($ORIGINA_DIR_CIF)){ mkdir($DESTINA_DIR_CIF); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_DEC      ;if(is_Dir($ORIGINA_DIR_DEC)){ mkdir($DESTINA_DIR_DEC); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_NOY      ;if(is_Dir($ORIGINA_DIR_NOY)){ mkdir($DESTINA_DIR_NOY); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_COM      ;if(is_Dir($ORIGINA_DIR_COM)){ mkdir($DESTINA_DIR_COM); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $NULLA                ;                                  
echo '<br>' . $NULLA                ;                                  
echo '<br>' . $ORIGINA_DIR_DLB_A    ;if(is_Dir($ORIGINA_DIR_DLB_A)){ mkdir($DESTINA_DIR_DLB_A); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_DLB_B    ;if(is_Dir($ORIGINA_DIR_DLB_B)){ mkdir($DESTINA_DIR_DLB_B); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
								    
echo '<br>' . $ORIGINA_DIR_NOY_PLA  ;if(is_Dir($ORIGINA_DIR_NOY_PLA)){ mkdir($DESTINA_DIR_NOY_PLA); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_NOY_SAV  ;if(is_Dir($ORIGINA_DIR_NOY_SAV)){ mkdir($DESTINA_DIR_NOY_SAV); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $ORIGINA_DIR_NOY_YEK  ;if(is_Dir($ORIGINA_DIR_NOY_YEK)){ mkdir($DESTINA_DIR_NOY_YEK); echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
								    
echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;


//  ||
//  || ATTENZIONE!!!
//  || file vdir.php
//  ||
//  ||
//  \/
// echo '<h1>' . $ORIGINA_DIR.'vdir.php' .'</h1>';
// echo '<h1>' . $DESTINA_DIR.'vdir.php' .'</h1>';
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR          . 'vdir.php');
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR_NOY      . 'vdir.php');
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR_COM      . 'vdir.php');
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR_NOY_PLA  . 'vdir.php');
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR_NOY_SAV  . 'vdir.php');
copy($ORIGINA_DIR.'vdir.php', $DESTINA_DIR_NOY_YEK  . 'vdir.php');



// ----
//  ||
//  || ATTENZIONE!!!
//  || file critici
//  ||
//  ||
//  \/

// CIF

$ORIGINA_DIR_CIF_LISTA = scandir( $ORIGINA_DIR_CIF );
$ORIGINA_DIR_CIF_CONTA = count( $ORIGINA_DIR_CIF_LISTA );
$ORIGINA_FIL_CIF_ULTIM = $ORIGINA_DIR_CIF . $ORIGINA_DIR_CIF_LISTA[$ORIGINA_DIR_CIF_CONTA-1];
//
//echo '<br>Origine Contati cif: ' . $ORIGINA_DIR_CIF_CONTA ;
//echo '<br>Origine Ultimo  cif: ' . $ORIGINA_FIL_CIF_ULTIM ;
//
//
$DESTINA_DIR_CIF_LISTA = scandir( $DESTINA_DIR_CIF );
$DESTINA_DIR_CIF_CONTA = count( $DESTINA_DIR_CIF_LISTA );
$DESTINA_FIL_CIF_ULTIM = $DESTINA_DIR_CIF . $ORIGINA_DIR_CIF_LISTA[$ORIGINA_DIR_CIF_CONTA-1];
//echo '<br>Destinazione Contati cif: ' . $DESTINA_DIR_CIF_CONTA ;
//echo '<br>Destinazione Ultimo  cif: ' . $DESTINA_FIL_CIF_ULTIM ;
//
if($DESTINA_DIR_CIF_CONTA === 2){  
echo '<h5 style="color:green;">ok 2 file . ..</h5>'; 

copy( $ORIGINA_FIL_CIF_ULTIM , $DESTINA_FIL_CIF_ULTIM );

}else{};



// DEC

$ORIGINA_DIR_DEC_LISTA = scandir( $ORIGINA_DIR_DEC );
$ORIGINA_DIR_DEC_CONTA = count( $ORIGINA_DIR_DEC_LISTA );
$ORIGINA_FIL_DEC_ULTIM = $ORIGINA_DIR_DEC . $ORIGINA_DIR_DEC_LISTA[$ORIGINA_DIR_DEC_CONTA-1];
//
//echo '<br>Origine Contati cif: ' . $ORIGINA_DIR_DEC_CONTA ;
//echo '<br>Origine Ultimo  cif: ' . $ORIGINA_FIL_DEC_ULTIM ;
//
//
$DESTINA_DIR_DEC_LISTA = scandir( $DESTINA_DIR_DEC );
$DESTINA_DIR_DEC_CONTA = count( $DESTINA_DIR_DEC_LISTA );
$DESTINA_FIL_DEC_ULTIM = $DESTINA_DIR_DEC . $ORIGINA_DIR_DEC_LISTA[$ORIGINA_DIR_DEC_CONTA-1];
//echo '<br>Destinazione Contati cif: ' . $DESTINA_DIR_DEC_CONTA ;
//echo '<br>Destinazione Ultimo  cif: ' . $DESTINA_FIL_DEC_ULTIM ;
//
if($DESTINA_DIR_DEC_CONTA === 2){  
echo '<h5 style="color:green;">ok 2 file . ..</h5>'; 

// 
copy( $ORIGINA_FIL_DEC_ULTIM , $DESTINA_FIL_DEC_ULTIM );

}else{};







//  /\
//  ||
//  || ATTENZIONE!!!
//  || file critici
//  ||
//  ||
// ----




//
// VISUALIZZA FIL
//


echo '<br>' . '<u>File: </u>';

echo '<br>' . $ORIGINA_FIL_INDEX    ; if(file_exists($ORIGINA_FIL_INDEX)){echo '<span class="ui green label">ok</span>';    }else{echo '<span class="ui red label">ko</span>';}
echo '<br>' . $ORIGINA_FIL_FUNICOTY ; if(file_exists($ORIGINA_FIL_FUNICOTY)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

echo '<br>' . $ORIGINA_FIL_001 ; if(file_exists($ORIGINA_FIL_001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}
echo '<br>' . $ORIGINA_FIL_002 ; if(file_exists($ORIGINA_FIL_002)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}
echo '<br>' . $ORIGINA_FIL_003 ; if(file_exists($ORIGINA_FIL_002)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}






echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;

//
echo '<br>' . $ORIGINA_FIL_DLB_A001    ; if(file_exists($ORIGINA_FIL_DLB_A001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}
echo '<br>' . $ORIGINA_FIL_DLB_A002    ; if(file_exists($ORIGINA_FIL_DLB_A002)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

//
echo '<br>' . $ORIGINA_FIL_DLB_B001    ; if(file_exists($ORIGINA_FIL_DLB_B001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;
echo '<br>' . $ORIGINA_FIL_NOY001    ; if(file_exists($ORIGINA_FIL_NOY001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

//echo '<br>' . $NULLA                ;
//echo '<br>' . $NULLA                ;
echo '<br>' . $ORIGINA_FIL_NOY_PLA001    ; if(file_exists($ORIGINA_FIL_NOY_PLA001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

//echo '<br>' . $NULLA                ;
//echo '<br>' . $NULLA                ;
echo '<br>' . $ORIGINA_FIL_NOY_YEK001    ; if(file_exists($ORIGINA_FIL_NOY_YEK001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

//echo '<br>' . $NULLA                ;
//echo '<br>' . $NULLA                ;
echo '<br>' . $ORIGINA_FIL_NOY_YEK002    ; if(file_exists($ORIGINA_FIL_NOY_YEK002)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}


echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;

echo '<br>' . $ORIGINA_FIL_COM001    ; if(file_exists($ORIGINA_FIL_COM001)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}

echo '<br>' . $ORIGINA_FIL_COM002    ; if(file_exists($ORIGINA_FIL_COM002)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';}





echo '</article>';


echo '<hr>';

// ||
// || VISUALIZZA LISTA 
// || FILE DESTINAZIONE
// ||
// ||
// \/



echo '<hr>';



echo '<br>' . '<u>Directory destinazione: </u>';

//
// VISUALIZZA DIR
//

echo '<br>' . $DESTINA_DIR          ;if(is_Dir($DESTINA_DIR)){      echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_DLB      ;if(is_Dir($DESTINA_DIR_DLB)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_CIF      ;if(is_Dir($DESTINA_DIR_CIF)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_DEC      ;if(is_Dir($DESTINA_DIR_DEC)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_NOY      ;if(is_Dir($DESTINA_DIR_NOY)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_COM      ;if(is_Dir($DESTINA_DIR_COM)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $NULLA                ;                                  
echo '<br>' . $NULLA                ;                                  
echo '<br>' . $DESTINA_DIR_DLB_A    ;if(is_Dir($DESTINA_DIR_DLB_A)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_DLB_B    ;if(is_Dir($DESTINA_DIR_DLB_B)){  echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
								    
echo '<br>' . $DESTINA_DIR_NOY_PLA  ;if(is_Dir($DESTINA_DIR_NOY_PLA)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_NOY_SAV  ;if(is_Dir($DESTINA_DIR_NOY_SAV)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
echo '<br>' . $DESTINA_DIR_NOY_YEK  ;if(is_Dir($DESTINA_DIR_NOY_YEK)){ echo '<span class="ui green label">ok</span>';}else{echo '<span class="ui red label">ko</span>';};
								    
echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;


//
// DA:
//
// ORIGINE
//
// COPIA I FILES 
//  ||
//  ||
//  ||
//  \/
//
// A:
//
// DESTINA
//



//
// COPIA E VISUALIZZA FIL
//

echo '<br>' . '<u>File: </u>';

echo '<br>' . $DESTINA_FIL_INDEX    ;
if(file_exists($DESTINA_FIL_INDEX))
{ 
echo '<span class="ui green label">ok</span>';

}
else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_INDEX . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_INDEX . '</span>';

copy($ORIGINA_FIL_INDEX, $DESTINA_FIL_INDEX);

};


echo '<br>' . $DESTINA_FIL_FUNICOTY ;
if(file_exists($DESTINA_FIL_FUNICOTY))
{ 
echo '<span class="ui green label">ok</span>';

}else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_FUNICOTY . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_FUNICOTY . '</span>';

copy($ORIGINA_FIL_FUNICOTY, $DESTINA_FIL_FUNICOTY);

};




echo '<br>' . $DESTINA_FIL_001 ;
if(file_exists($DESTINA_FIL_001))
{ 
echo '<span class="ui green label">ok</span>';

}else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_001 . '</span>';

copy($ORIGINA_FIL_001, $DESTINA_FIL_001);

};




echo '<br>' . $DESTINA_FIL_002 ;
if(file_exists($DESTINA_FIL_002))
{ 
echo '<span class="ui green label">ok</span>';

}else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_002 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_002 . '</span>';

copy($ORIGINA_FIL_002, $DESTINA_FIL_002);

};




echo '<br>' . $DESTINA_FIL_003 ;
if(file_exists($DESTINA_FIL_003))
{ 
echo '<span class="ui green label">ok</span>';

}else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_003 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_003 . '</span>';

copy($ORIGINA_FIL_003, $DESTINA_FIL_003);

};


















echo '<br>' . $NULLA                ;
echo '<br>' . $NULLA                ;

echo '<br>' . $DESTINA_FIL_DLB_A001    ;
if(file_exists($DESTINA_FIL_DLB_A001))
{ echo '<span class="ui green label">ok</span>';

}else
{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_DLB_A001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_DLB_A001 . '</span>';

copy($ORIGINA_FIL_DLB_A001, $DESTINA_FIL_DLB_A001);

};
echo '<br>' . $DESTINA_FIL_DLB_A002    ;
if(file_exists($DESTINA_FIL_DLB_A002)){ 
echo '<span class="ui green label">ok</span>';
}else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_DLB_A002 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_DLB_A002 . '</span>';

copy($ORIGINA_FIL_DLB_A002, $DESTINA_FIL_DLB_A002);

};

echo '<br>' . $DESTINA_FIL_DLB_B001    ;
if(file_exists($DESTINA_FIL_DLB_B001)){ 
echo '<span class="ui green label">ok</span>';
}
else{

echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_DLB_B001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_DLB_B001 . '</span>';

copy($ORIGINA_FIL_DLB_B001, $DESTINA_FIL_DLB_B001);

};


echo '<br>' . $DESTINA_FIL_NOY001    ;
if(file_exists($DESTINA_FIL_NOY001)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_NOY001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_NOY001 . '</span>';

copy($ORIGINA_FIL_NOY001, $DESTINA_FIL_NOY001);

};




echo '<br>' . $DESTINA_FIL_NOY_PLA001    ;
if(file_exists($DESTINA_FIL_NOY_PLA001)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_NOY_PLA001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_NOY_PLA001 . '</span>';

copy($ORIGINA_FIL_NOY_PLA001, $DESTINA_FIL_NOY_PLA001);

};


echo '<br>' . $DESTINA_FIL_NOY_SAV001    ;
if(file_exists($DESTINA_FIL_NOY_SAV001)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_NOY_SAV001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_NOY_SAV001 . '</span>';

copy($ORIGINA_FIL_NOY_SAV001, $DESTINA_FIL_NOY_SAV001);

};


echo '<br>' . $DESTINA_FIL_NOY_YEK001    ;
if(file_exists($DESTINA_FIL_NOY_YEK001)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_NOY_YEK001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_NOY_YEK001 . '</span>';

copy($ORIGINA_FIL_NOY_YEK001, $DESTINA_FIL_NOY_YEK001);

};

echo '<br>' . $DESTINA_FIL_NOY_YEK002    ;
if(file_exists($DESTINA_FIL_NOY_YEK002)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_NOY_YEK002 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_NOY_YEK002 . '</span>';

copy($ORIGINA_FIL_NOY_YEK002, $DESTINA_FIL_NOY_YEK002);

};






echo '<br>' . $DESTINA_FIL_COM001    ;
if(file_exists($DESTINA_FIL_COM001)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_COM001 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_COM001 . '</span>';

copy($ORIGINA_FIL_COM001, $DESTINA_FIL_COM001);

};



echo '<br>' . $DESTINA_FIL_COM002    ;
if(file_exists($DESTINA_FIL_COM002)){ 
echo '<span class="ui green label">ok</span>';
}
else{
echo '<span class="ui red label">ko</span><br>';
echo '<span class="ui orange label">' . $ORIGINA_FIL_COM002 . '</span>';
echo '<span class="ui orange label">' . '--&#62;'. '</span>';
echo '<span class="ui orange label">' . $DESTINA_FIL_COM002 . '</span>';

copy($ORIGINA_FIL_COM002, $DESTINA_FIL_COM002);

};


};  // if $THE_BIG_CODE===0 1


};  // if VAI===0 1


?>

<hr>

<section style="margin-top:2.5rem;" class="ui comments">
 <div class="comment">
	<div class="content">
	<a href="https://www.rinaldo-rasa.it/funicoty07/creaty.php" class="author">rinaldo rasa &copy; 2024</a>
		<div class="text">
		CREATY_240205_1245a
		</div>
	</div>
 </div>
</section>

<hr>

</main>

<div id="fine"></div>
</body>

</html>