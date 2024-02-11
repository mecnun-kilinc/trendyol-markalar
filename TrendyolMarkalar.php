<?php
 

	set_time_limit(0);
	ini_set('memory_limit', '-1');
	error_reporting(1);
	ini_set('display_errors', 1);


	 function TrendyolMarkalar($pazaryeri_id, $page) {
       

 	 $surl = 'https://api.trendyol.com/sapigw/brands?size=100&page='.$page;	
	 
	 
     $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL, $surl);
	 curl_setopt($ch, CURLOPT_HEADER, 0);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 
	 $results = json_decode(curl_exec($ch));
	 
	 curl_close($ch);		
 
		
	$addBrand = "";
	
	foreach($results->brands as $result) {
		 
    
    echo $result->name . "<hr />";
	
	
	}
 
	     
	     $page++;
 
		 if (!empty($results->brands)) {
			 
             if ($page == 2) {
			 // Çok fazla marka olduğu için burada işlemi sonlandırıyorum.
			 echo "<h1>Sayfa " . $page . "</h1>";
			 die;	 
			 
			 }
			 
			 
			return  TrendyolMarkalar(1, $page);
			 
		 }	else {
			echo " Bitti ";
		 }
	     
	}


	TrendyolMarkalar(1,0);