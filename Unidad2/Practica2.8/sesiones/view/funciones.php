<?php
function consonante($string,$tipo){
  $conso = '';
  for ($i=0; $i < strlen ($string); $i++) {
    // code...
    if(substr($string,$i,1) != 'A' &&
    substr($string,$i,1) != 'E' &&
    substr($string,$i,1) != 'I' &&
    substr($string,$i,1) != 'O' &&
    substr($string,$i,1) != 'U'){
      if($tipo == '1'){
        $conso = substr($string,$i,1);
      }else{
        return substr($string,$i,1);
      }
    }
  }
  return $conso;

}
function vocal($string){
  for ($i=0; $i < strlen ($string); $i++) {
    // code...
    if(substr($string,$i,1) == 'A' ||
    substr($string,$i,1) == 'E' ||
    substr($string,$i,1) == 'I' ||
    substr($string,$i,1) == 'O' ||
    substr($string,$i,1) == 'U'){
      return substr($string,$i,1);
    }
  }
  return 'X';
}


  function validarNombre($string){
    $palabra = explode(' ',$string);
    if($string == 'JOSE MARIA' || $string == 'MARIA JOSE'){
      return 'XXXX';
    }
    if($palabra[0] == 'JOSE' ||
      $palabra[0] == 'MARIA'){
        return $palabra[1];
    }
    if(sizeof($palabra) == 1){
      return $string;
    }
    if($palabra[1] == 'MARIA' ||
    $palabra[1] == 'JOSE'){
      return $palabra[0];
    }
    return $string;
  }

  function validarN($CURP){
    if($CURP[0]==utf8_decode('Ñ')){
      $CURP[0] = 'X';
    }
    if($CURP[2]==utf8_decode('Ñ')){
      $CURP[2] = 'X';
    }
    if($CURP[3]==utf8_decode('Ñ')){
      $CURP[3] = 'X';
    }
    if($CURP[10]==utf8_decode('Ñ')){
      $CURP[10] = 'X';
    }
    if($CURP[11]==utf8_decode('Ñ')){
      $CURP[11] = 'X';
    }
    if($CURP[12]==utf8_decode('Ñ')){
      $CURP[12] = 'X';
    }
    return $CURP;
  }

  function eliminar_tildes($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
  ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
      $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
  bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
      $cadena = utf8_decode($cadena);
      $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
      $cadena = strtoupper($cadena);
      return utf8_encode($cadena);
}
  function antisonante($CURP){
    $secundario = $CURP;
    $CURP = $secundario[0] . $secundario[1] . $secundario[2] . $secundario[3];

    $CURP = str_replace("BACA","BXCA",$CURP);
		$CURP = str_replace("BAKA","BXKA",$CURP);
		$CURP = str_replace("BUEI","BXEI",$CURP);
		$CURP = str_replace("CACA","CXCA",$CURP);
		$CURP = str_replace("CACO","CXCO",$CURP);
		$CURP = str_replace("CAGA","CXGA",$CURP);
		$CURP = str_replace("CAGO","CXGO",$CURP);
		$CURP = str_replace("CAKA","CXKA",$CURP);
		$CURP = str_replace("CAKO","CXKO",$CURP);
		$CURP = str_replace("COGE","CXGE",$CURP);
		$CURP = str_replace("COGI","CXGI",$CURP);
		$CURP = str_replace("COJA","CXJA",$CURP);
		$CURP = str_replace("COJE","CXJE",$CURP);
		$CURP = str_replace("CXJI","CXJI",$CURP);
		$CURP = str_replace("COJO","CXJO",$CURP);
		$CURP = str_replace("COLA","CXLA",$CURP);
		$CURP = str_replace("CULO","CXLO",$CURP);
		$CURP = str_replace("FALO","FXLO",$CURP);
		$CURP = str_replace("FETO","FXTO",$CURP);
		$CURP = str_replace("GETA","GXTA",$CURP);
		$CURP = str_replace("GUEI","GXEI",$CURP);
		$CURP = str_replace("GUEY","GXEY",$CURP);
		$CURP = str_replace("JETA","JXTA",$CURP);
		$CURP = str_replace("JOTO","JXTO",$CURP);
		$CURP = str_replace("KACA","KXCA",$CURP);
		$CURP = str_replace("KACO","KXCO",$CURP);
		$CURP = str_replace("KAGO","KXGO",$CURP);
		$CURP = str_replace("KOGE","KXGE",$CURP);
		$CURP = str_replace("KOGI","KXGI",$CURP);
		$CURP = str_replace("KOJA","KXJA",$CURP);
		$CURP = str_replace("KOJE","KXJE",$CURP);
		$CURP = str_replace("KOJI","KXJI",$CURP);
		$CURP = str_replace("KOJO","KXJO",$CURP);
		$CURP = str_replace("KOLA","KXLA",$CURP);
		$CURP = str_replace("KULO","KXLO",$CURP);
		$CURP = str_replace("LILO","LXLO",$CURP);
		$CURP = str_replace("LOCA","LXCA",$CURP);
		$CURP = str_replace("WUEY","WXEY",$CURP);
		$CURP = str_replace("WUEI","WXEI",$CURP);
		$CURP = str_replace("VUEY","VXEY",$CURP);
		$CURP = str_replace("VUEI","VXEI",$CURP);
		$CURP = str_replace("VAKA","VXKA",$CURP);
		$CURP = str_replace("VAGO","VXGO",$CURP);
		$CURP = str_replace("TETA","TXTA",$CURP);
		$CURP = str_replace("VACA","VXCA",$CURP);
		$CURP = str_replace("SENO","SXNO",$CURP);
		$CURP = str_replace("RUIN","RXIN",$CURP);
		$CURP = str_replace("ROBO","RXBO",$CURP);
		$CURP = str_replace("ROBE","RXBE",$CURP);
		$CURP = str_replace("ROBA","RXBA",$CURP);
		$CURP = str_replace("RATA","RXTA",$CURP);
		$CURP = str_replace("QULO","QXLO",$CURP);
		$CURP = str_replace("PUTO","PXTO",$CURP);
		$CURP = str_replace("PUTA","PXTA",$CURP);
		$CURP = str_replace("POPO","PXPO",$CURP);
		$CURP = str_replace("PITO","PXTO",$CURP);
		$CURP = str_replace("PIPI","PXPI",$CURP);
		$CURP = str_replace("PENE","PXNE",$CURP);
		$CURP = str_replace("PEDO","PXDO",$CURP);
		$CURP = str_replace("PEDA","PXDA",$CURP);
		$CURP = str_replace("NACO","NXCO",$CURP);
		$CURP = str_replace("NACA","NXCA",$CURP);
		$CURP = str_replace("MULO","MXLO",$CURP);
		$CURP = str_replace("MULA","MXLA",$CURP);
		$CURP = str_replace("MOKO","MXKO",$CURP);
		$CURP = str_replace("MOCO","MXCO",$CURP);
		$CURP = str_replace("BACA","BXCA",$CURP);
		$CURP = str_replace("MION","MXON",$CURP);
		$CURP = str_replace("MIAR","MXAR",$CURP);
		$CURP = str_replace("MEON","MXON",$CURP);
		$CURP = str_replace("MEAS","MXAS",$CURP);
		$CURP = str_replace("MEAR","MXAR",$CURP);
		$CURP = str_replace("MAMO","MXMO",$CURP);
		$CURP = str_replace("MAME","MXME",$CURP);
		$CURP = str_replace("LOKO","LXKO",$CURP);
		$CURP = str_replace("LOKA","LXKA",$CURP);
		$CURP = str_replace("LOCO","LXCO",$CURP);
    $CURP = str_replace("JOJO","JXJO",$CURP);
    $CURP = str_replace("JALO","JXLO",$CURP);
    $secundario[0] = $CURP[0];
    $secundario[1] = $CURP[1];
    $secundario[2] = $CURP[2];
    $secundario[3] = $CURP[3];
    return $secundario;
  }
 ?>
