<?php 
$sourceStrings = array(
            'A very looooooong wooooord', 
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
	//echo $str;
	//echo "\n";
    $str_arr = explode(" ", $str);
    //print_r($str_arr);
	  for($j = 0; $j < count($str_arr); $j++){ 
    	if(strlen($str_arr[$j]) <= 6) $str_arr[$j] = $str_arr[$j];
    		else $str_arr[$j] = substr($str_arr[$j],0,6)."*";
    		  // echo $str_arr[$j]."\n";
    }

     $str2 = implode(" ",$str_arr);
     //echo $str2."\n";
     $arr_new[$i] = $str2;
     //echo $arr_new[$i]."\n";
	}
	print_r($arr_new);
	/*if(!($i == 6))  {$arr_new[$i] = "'".$str2."',";}
     else $arr_new[$i] = "'".$str2."'";
    // echo $arr_new[$i];/*/

     $str_new = implode("\n",$arr_new);
     echo $str_new;
     $str_end = explode("\n",$str_new);
     //echo $str_end;
     print_r($str_end);
   	 // }
   	 //$str_new = array($str2);
     //echo $str_new;
   	  //print_r($arr_new);*/
	 return $str_new; 
   }	 
shortener($sourceStrings);