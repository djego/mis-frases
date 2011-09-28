<?php
/**
 * 
 * Esta clase contiene metodos de uso general en todo el proyecto
 * 
 * @date 2009-05-04
 * @author Gary Rojas
 *
 */
class Utils
{
    /**
   * Devuelve el nombre de subdominio de una URL dada
   *
   * @param string $url, una URL valida
   * @param string $hostname
   * @return string
   * 
   */
  public static function getSubdomain($url, $hostname)
  {
    $url = str_replace('http://', '', $url);
    $domain = "\." . implode("\.", explode(".", trim($hostname)));
    
    $pattern = "([^.|^www]+)$domain"; 
    if (!ereg($pattern, $url, $regs )) {
      $subdomain = "";
    } else {
      if($regs[1] != "www"){
        $subdomain = $regs[1];     
      } else {
      $subdomain = "";
      }
    }
  
    return $subdomain;

  }
  
  /**
   * Devuelve una cadena formateada de la fecha pasada como parametro.
   * El formato usado es el mismo que se usa para PHP, pero solo usamos los siguientes:
   * %d = 01-31; 
   * %l ('L' minuscula) = Nombre del dia (domingo, lunes, martes, ... ); 
   * %D = Nombre corto del dia en tres letras (dom, lun, mar, mie, jue, vie, sab)
   * %m = 01-12;   
   * %F = Nombre del Mes (enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre); 
   * %M = Nombre corto del mes en tres letras (ene, feb, mar, abr, may, jun, jul, ago, sep, oct, nov, dic)   
   * %Y = Anio: 0000-9999; 
   * %H = Horas: 01-24; 
   * %i = Minutos: 00-59; 
   * %s = Segundos: 00-59 
   * dia de la semana: 0:Domingo, 1:Lunes, 2: Martes ... 6:Sabado
   * 
   * @param string $date, La fecha a ser formateda, debe estar en el formato PHP: Y-m-d H:i:s, o en ISO: yyyy-mm-dd hh:mm:ss
   * @param string $format, formato al que se desea pasar la fecha dada
   * @return string  
   * 
   */
  public static function getFormattedDate($date, $format='%d %M %Y')
  {
    $day_names = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');   
    $month_names = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    $month_abrev = array('', 'Ene', 'Febr', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
    if (!$date) return false;
    extract(getdate(strtotime($date)));
    
    $options['%d'] = ($mday<10) ? '0'.$mday : $mday;
    $options['%m'] = ($mon<10) ? '0'.$mon : $mon;
    $options['%Y'] = $year;
    $options['%H'] = ($hours<10) ? '0'.$hours : $hours;
    $options['%i'] = ($minutes<10) ? '0'.$minutes : $minutes;
    $options['%s'] = ($seconds<10) ? '0'.$seconds : $seconds;
    $options['%l'] = $day_names[(int)$wday];
    $options['%D'] = substr($day_names[(int)$wday], 0, 3);
    $options['%F'] = $month_names[(int)$mon];
    $options['%f'] = $month_abrev[(int) $mon];
    $options['%M'] = substr($month_names[(int)$mon], 0, 3);
  

    $keys = array();   $values = array();
    foreach ($options as $k => $v) {
      $keys[] = $k;
      $values[] = $v;
    }

    return str_replace($keys, $values, $format);
  
  }
  
  
  /**
   * Devuelve la fecha resultante despues de agregar el periodo requerido
   * 
   * @param string $date, La fecha a la cual se agregara el periodo, debe estar en el formato PHP: Y-m-d H:i:s, o en ISO: yyyy-mm-dd hh:mm:ss
   * @param integer $period, periodo a agregar
   * @param string $type, tipo de tiempo (d: dias, m: meses, y: anios, H: horas, i: minutos, s: segundos)
   * @return string  
   * 
   */
  public static function addPeriod($date, $period = 0, $type = 'd')
  {    
    extract(getdate(strtotime($date)));       
    if ($type == 'd')    $mkdate_end = mktime($hours, $minutes, $seconds, $mon, $mday + $period, $year);    
    elseif ($type == 'm') $mkdate_end = mktime($hours, $minutes, $seconds, $mon + $period, $mday, $year);
    elseif ($type == 'Y') $mkdate_end = mktime($hours, $minutes, $seconds, $mon, $mday, $year + $period);
    elseif ($type == 'H') $mkdate_end = mktime($hours + $period, $minutes, $seconds, $mon, $mday, $year);
    elseif ($type == 'i') $mkdate_end = mktime($hours, $minutes + $period, $seconds, $mon, $mday, $year);
    elseif ($type == 's') $mkdate_end = mktime($hours, $minutes, $seconds + $period, $mon, $mday, $year);
          
    return date('Y-m-d H:i:s', $mkdate_end);
        
  }
  
  /**
   * Devuelve el contenido de la pagina web que se le pasa como parametro.
   * Es similar a file_get_contents cuando se le pasa una URL como parametro. Debe estar habilitada
   * la extension CURL.
   *
   * @param string $url, una URL valida
   * @return string
   */
  public static function fileGetContents($url)
  {      
    $ch = curl_init();
    $timeout = 60; // asignamos cero para que espere infinitamente
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $retval = curl_exec($ch);
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200 ) {      
      return false;
    }

    curl_close($ch);
  
  return $retval;
   
  }
  
  
   /**
   * Verfica si una cadena esta codificada en UTF-8
   *
   * Yi Stone Li<yili@yahoo-inc.com>
   * Copyright (c) 2007 Yahoo! Inc. All rights reserved.
   * Licensed under the BSD open source license
   *
   * @param string
   *
   * @return bool true si $string es una cadena UTF-8 y false en caso contrario.
   */
   public static function isUTF8($string)
  {
    for ($idx = 0, $strlen = strlen($string); $idx < $strlen; $idx++) {
      $byte = ord($string[$idx]);

      if ($byte & 0x80) {
        if (($byte & 0xE0) == 0xC0) {          
          $bytes_remaining = 1; // 2 byte char
        } elseif (($byte & 0xF0) == 0xE0) {          
          $bytes_remaining = 2; // 3 byte char
        } elseif (($byte & 0xF8) == 0xF0) {          
          $bytes_remaining = 3; // 4 byte char
        } else {
          return false;
        }

        if ($idx + $bytes_remaining >= $strlen) {
          return false;
        }

        while ($bytes_remaining--) {
          if ((ord($string[++$idx]) & 0xC0) != 0x80) {
            return false;
          }
        }
        
      }
      
    }

    return true;
  }
  

  /**
   * Devuelve la cantidad de bytes de una cadena que puede estar 
   * codificada en  ASCII o UTF-8
   * Este script ha sido tomado de php.net
   *
   * @param string
   *
   * @return integer
   */
  public static function strlenUTF8($str)
  {
    //cantidad de caracteres de la cadena
    $strlen_var = strlen($str);
 
    // string bytes counter
    $d = 0; 
     
   /*
    * Iterate over every character in the string,
    * escaping with a slash or encoding to UTF-8 where necessary
    */
    for ($c = 0; $c < $strlen_var; ++$c) {
         
      $ord_var_c = ord($str{$d});
        
      switch (true) {
        case (($ord_var_c >= 0x20) && ($ord_var_c <= 0x7F)):
            // characters U-00000000 - U-0000007F (same as ASCII)
            $d++;
            break;
             
        case (($ord_var_c & 0xE0) == 0xC0):
            // characters U-00000080 - U-000007FF, mask 110XXXXX
            $d+=2;
            break;
 
        case (($ord_var_c & 0xF0) == 0xE0):
            // characters U-00000800 - U-0000FFFF, mask 1110XXXX
            $d+=3;
            break;
 
        case (($ord_var_c & 0xF8) == 0xF0):
            // characters U-00010000 - U-001FFFFF, mask 11110XXX
            $d+=4;
            break;
 
        case (($ord_var_c & 0xFC) == 0xF8):
            // characters U-00200000 - U-03FFFFFF, mask 111110XX
            $d+=5;
            break;
 
        case (($ord_var_c & 0xFE) == 0xFC):
            // characters U-04000000 - U-7FFFFFFF, mask 1111110X
            $d+=6;
            break;
        default:
          $d++;   
      }
    }
     
    return $d;
  }
  
  
  /**
   * Genera el slug de una cadena dada. La cadena generada tiene las siguientes caracteristicas:
   * - Los caracteres de la cadena estan en minusculas: a-z, 0-9   
   * - Los espacios son reemplazados por guiones medios ' ' => '-'
   * - La cadena empieza por: a-z, 0-9
   * - No tiene dos guiones medios seguidos
   *
   *
   * @param string cadena a que va a ser procesada, puede estar codificada en  ASCII o UTF-8
   * @param integer cantidad maxima de palabras que debe tener la cadena resultante
   * @param integer cantidad maxima de caracteres que debe tener la cadena resultante
   *
   * @return string cadena slug
   */  
  public static function slugify($string, $max_words=10, $max_length=65)
  {   
    if (self::isUTF8($string))  $string = utf8_decode($string);
    $string = trim(strtolower($string));
    $strlength = strlen($string); 
    $retval = "";
    
    for ($i = 0; $i<$strlength; $i++) {
    
      $ascii = ord($string[$i]);
                
      if ($ascii == 32 || $ascii == 95 || $ascii == 45) { // " ", "_", "-"    
        $retval .= "-";
      } elseif ($ascii == 241 || $ascii == 209) { // "enie" 
        $retval .= "n";
      } elseif (($ascii >= 48 && $ascii <= 57) || ($ascii  >= 65 && $ascii  <= 90) || 
                ($ascii >= 97 && $ascii <= 122) ) { // "0-9", "A-Z", "a-z", "-"
        $retval .= $string[$i];
      } elseif (($ascii >= 192 && $ascii <= 197) || ($ascii >= 224 && $ascii <= 229)) {
        $retval .= "a";
      } elseif (($ascii >= 200 && $ascii <= 203) || ($ascii >= 232 && $ascii <= 235)) { 
        $retval .= "e";
      } elseif (($ascii >= 204 && $ascii <= 207) || ($ascii >= 236 && $ascii <= 239)) { 
        $retval .= "i";
      } elseif (($ascii >= 210 && $ascii <= 214) || ($ascii >= 242 && $ascii <= 246)) {
        $retval .= "o";
      } elseif (($ascii >= 217 && $ascii <= 220) || ($ascii >= 249 && $ascii <= 252)) {
        $retval .= "u";
      } 
      
    }
      
    $arr_patron = array("/^_{1,}/", "/^-{1,}/", "/_+\$/", "/-+\$/", "/_{2,}/", "/-{2,}/");
    $arr_replace = array("", "", "", "", "_", "-");   
    $retval = preg_replace ($arr_patron , $arr_replace , $retval);
      
    do {                  
      list($arr_words) = array_chunk(explode("-", $retval), $max_words);
      $retval = implode("-", $arr_words); 
      
      $strlength = strlen($retval);     
      $max_words --;      
    } while ($strlength > $max_length);
            
  
    return $retval;   
    
  }
  

  function copyDir($srcdir, $dstdir, $chmod = 0755, $verbose = false)
  {
    $num = 0;
    $bar_path = '/';  // for windows: '\\', for linux: '/'
    if(!is_dir($dstdir)) mkdir($dstdir, $chmod);
    if($curdir = opendir($srcdir)) {
    while($file = readdir($curdir)) {
      if($file != '.' && $file != '..') {
      $srcfile = $srcdir . $bar_path . $file;
      $dstfile = $dstdir . $bar_path . $file;
      if(is_file($srcfile)) {
        if(is_file($dstfile)) $ow = filemtime($srcfile) - filemtime($dstfile); else $ow = 1;
        if($ow > 0) {
        if($verbose) echo "Copying '$srcfile' to '$dstfile'...";
        if(copy($srcfile, $dstfile)) {
          chmod($dstfile, $chmod);
          touch($dstfile, filemtime($srcfile)); $num++;         
          if($verbose) echo "OK\n";
        }
        elseif($verbose) echo "Error: File '$srcfile' could not be copied!\n";
        }                  
      } elseif(is_dir($srcfile)) {
        $num += copyDir($srcfile, $dstfile, $chmod, $verbose);
      }
      }
    }
    closedir($curdir);
    }
    return true;
  }
  
  
  public static function removeDir($dirname, $verbose = false)
  {       
    if (!is_writable($dirname) && $verbose) {
      echo 'El objetivo ' . $dirname . ' no es modificable';
      return false;
    }
        
    if (is_dir($dirname)) { 
      if (chdir($dirname)) { 
        $handle = opendir('.');       
        while ($item = readdir($handle)) {          
          if ($item != "." && $item != "..") {            
            if (is_dir($item)) {
              if (!self::removeDir($dirname ."/". $item)) return false;
            } else {              
              if (!unlink($item)) return false;
            }
          }       
        }
         
        closedir($handle);
        chdir(dirname($dirname));    
        return rmdir($dirname);
        
      }
     
    }
  
    return true;
  
  }
  
  /**
   * Genera un nombre unico
   * 
   * @param string $prefix    prefijo que se antepondra al nombre generado
   * @param string $suffix    prefijo que se agregara al nombre generado
   * @return string 
   */
  public static function generateUniqueName($prefix = '', $suffix = '')
  {
    return $prefix . uniqid() . $suffix;
  }
  
  
  /**
   * Genera una clave de manera aleatoria
   * la letra l (ele) se ha omitido para que no se confunda con 
   * el numero 1
   * 
   * @param int $lenght     longitud de la clave a generar
   * @return string
   */
  public static function randomKey($lenght = 5)
  {
    $chars = 'abcdefghijkmnopqrstuvwxyz0123456789';
    
    $key = '';
    for ($i=0; $i<$lenght; $i++) {
      $pos = rand(0, 34);
      $key .= $chars[$pos];
    }
    
    return $key;
  }
  
  /**
   * Descomprime un archivo .zip en el directorio dado
   * Debe estar habilitada la extension ZIP
   * 
   * @param $filename       ruta del archivo a descomprimir
   * @param $extract_to     ruta al directorio donde se guardaran los archivo descompresos
   * @param $delete_file    indica si se debe o no eliminar el archivo original
   * @return boolean        true si todo se realizo correctamente
   */
  public static function unzip($filename, $extract_to, $delete_file = false)
  {
    if (!function_exists('zip_open') || !is_readable($filename)) {
      return null;
    }
    
    $zip = new ZipArchive();
    $zip->open($filename);
    $zip->extractTo($extract_to);
    $zip->close();
    
    if ($delete_file) unlink($filename);
  }
  
  
  /**
   * Descomprime un archivo .rar en el directorio dado
   * Debe estar instalado la libreria PECL
   * http://pecl.php.net/package/rar
   * 
   * @param $filename       ruta del archivo a descomprimir
   * @param $extract_to     ruta al directorio donde se guardaran los archivo descompresos
   * @param $delete_file    indica si se debe o no eliminar el archivo original
   * @return boolean        true si todo se realizo correctamente
   */
  public static function unrar($filename, $extract_to, $delete_file = false)
  {
    if (!function_exists('rar_open') || !is_readable($filename)) {
      return null;
    }
    
    $rar_file = rar_open($filename);
    $entries = rar_list($rar_file);
    print_r($entries);
    
    foreach ($entries as $entry) {
      $entry->extract($extract_to);
    }
    
    rar_close($rar_file);
    
  }
 static public function getSizeImage($url)
  {
  	$datos = GetImageSize($url) OR die("Imagen no válida");
  	return $datos;
  }
  
  
  
  static public function getTimePublic($datefrom, $dateto = -1)
  {
    // valores predeterminados y asumir si es 0 se pasa en ese
    // su error en lugar de la fecha
    $datefrom = strtotime($datefrom);
    if ($datefrom <= 0) {
      return " mucho tiempo";
    }

    if ($dateto == -1) {
      $dateto = time();
    }

    $difference = $dateto - $datefrom;

    if ($difference < 60) {
      $interval = "s";
    } elseif ($difference >= 60 && $difference < 60 * 60) {
      $interval = "n";
    } elseif ($difference >= 60 * 60 && $difference < 60 * 60 * 24) {
      $interval = "h";
    } elseif ($difference >= 60 * 60 * 24 && $difference < 60 * 60 * 24 * 7) {
      $interval = "d";
    } elseif ($difference >= 60 * 60 * 24 * 7 && $difference < 60 * 60 * 24 * 30) {
      $interval = "ww";
    } elseif ($difference >= 60 * 60 * 24 * 30 && $difference < 60 * 60 * 24 * 365) {
      $interval = "m";
    } elseif ($difference >= 60 * 60 * 24 * 365) {
      $interval = "y";
    }

    switch ($interval) {
      case "m":
        $months_difference = floor($difference / 60 / 60 / 24 / 29);
        while (mktime(date("H", $datefrom), date("i", $datefrom), date("s", $datefrom), date("n", $datefrom) + ($months_difference), date("j", $dateto), date("Y", $datefrom)) < $dateto) {

          $months_difference++;
        }
        $datediff = $months_difference;

        if ($datediff == 12) {
          $datediff--;
        }

        $message = ($datediff == 1) ? "$datediff mes" : "$datediff meses";
        break;

      case "y":
        $datediff = floor($difference / 60 / 60 / 24 / 365);
        $message = ($datediff == 1) ? "$datediff hace un año" : "$datediff años";
        break;

      case "d":
        $datediff = floor($difference / 60 / 60 / 24);
        $message = ($datediff == 1) ? "$datediff hace días" : "$datediff la semana pasada";
        break;

      case "ww":
        $datediff = floor($difference / 60 / 60 / 24 / 7);
        $message = ($datediff == 1) ? "$datediff semana" : "$datediff semanas";
        break;

      case "h":
        $datediff = floor($difference / 60 / 60);
        $message = ($datediff == 1) ? "$datediff hora" : "$datediff horas";
        break;

      case "n":
        $datediff = floor($difference / 60);
        $message = ($datediff == 1) ? "$datediff minuto" : "$datediff minutos";
        break;

      case "s":
        $datediff = $difference;
        $message = ($datediff == 1) ? "$datediff segundo" : "$datediff segundos";
        break;
    }

    $message = "hace $message";

    return $message;
  }
  
}