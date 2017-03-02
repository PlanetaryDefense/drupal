<?php require '/var/www/html/php/vendor/autoload.php';use Enzim\Lib\TikaWrapper\TikaWrapper;$url="../../../../default/private_files/filedepot/1/2014 09 26 NASA-NNSA PD TIM at LANL - Agenda rev1.docx";
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$fullstring = TikaWrapper::getMetaData($url);
$parsed = get_string_between($fullstring, 'Author:', 'Content-Length');
print_r(preg_split("/[\s,]+/", $parsed));
$array= preg_split("/[\s,]+/", $parsed);echo $array[1];
?>
