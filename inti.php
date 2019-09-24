<?php
function getKey($input) {
	$panjang = strlen($input);
	$output = '';	
	for($i=0; $i < $panjang; $i++) {
	  $temp = $input[$i]; 
	  $temp = ord($temp);
	  $output = $output + $temp;
	}
	$rata2 = substr($output, 0, 1);
	$rata21 = substr($output, -1);
	$output = $rata2 . '|' . $rata21;
	return $output;
}

function keKanan($string,$offset=0) {
	$new = '';
    for ($i = 0; $i < strlen($string); $i++) 
		$new .= chr(ord($string[$i])+$offset);
    return $new;
}


function keKiri($string,$offset=0) {
	$new = '';
    for ($i = 0; $i < strlen($string); $i++)
        $new .= chr(ord($string[$i])-$offset);
    return $new;
}


function keascii($input,$offset=0) {
    $new = '';
    for ($i = 0; $i < strlen($input); $i++)
        $new .= ord($input[$i])-$offset . '|';
    return substr($new, 0, -1);
}


function dariascii($input,$offset=0) {
	$new = '';
	$input = explode('|', $input);
	foreach($input as $in => $v){
        $new .= chr($v + $offset);
	}

    return $new;
}


function ZEYLOBsdGM5($input) {

	$key = array(
		'1' => 'Z',
		'2' => 'E',
		'3' => 'Y',
		'4' => 'L',
		'5' => 'O',
		'6' => 'B',
		'7' => 's',
		'8' => 'd',
		'9' => 'G',
		'0' => 'M',
		'|' => '5'
	);

	$output = str_replace(array_keys($key), $key, $input);

	return $output;
}


function fromZEYLOBsdGM5($input) {

	$key = array(
		'1' => 'Z',
		'2' => 'E',
		'3' => 'Y',
		'4' => 'L',
		'5' => 'O',
		'6' => 'B',
		'7' => 's',
		'8' => 'd',
		'9' => 'G',
		'0' => 'M',
		'|' => '5'
	);

	$output = str_replace($key, array_keys($key), $input);

	return $output;
}
?>