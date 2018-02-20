<?php 
$sourceStrings = array(
            'A very looooooong', 
            'Loremia ipsumia dolaria sitia ameti', 
            'Have you ever been to Lituania ?',
            'Anyone who. reads Old and Middle',
            'English literary texts will be familiar',
            'with the mid-brown volumes of the EETS,',
            'with the symbol of Alfreds jewel embossed on the front cover.'
        );
function shortener($shortMe) {
	print_r($shortMe);
	echo $shortMe."******\n";
	$end = count($shortMe);
	for($i = 0; $i < $end; $i++){
	$str = $shortMe[$i]; 
	$str_arr = explode(" ", $str);
    for($j = 0; $j < count($str_arr); $j++){ 
    	if(strlen($str_arr[$j]) <= 6) $str_arr[$j] = $str_arr[$j];
    		else $str_arr[$j] = substr($str_arr[$j],0,6)."*";
    		  
    }

     $str2 = implode(" ",$str_arr);
     $arr_new[$i] = $str2;
	}
	print_r($arr_new);
	$str_new = implode("\n",$arr_new);
     echo $str_new;
     $str_end = explode("\n",$str_new);
     echo $str_end;
   	 
	 return $str_new; 
   }	 
shortener($sourceStrings);
