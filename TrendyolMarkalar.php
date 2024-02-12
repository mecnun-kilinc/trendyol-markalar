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


	 //  $addBrand .= "INSERT INTO TABLO_ADI SET id = idVar, name = nameVar";
	
     $total = count($results->brands);
     
	 $i = 0;
	 
	 foreach($results->brands as $result) {

   // Markaları veri tabanına'a ekleme işlemini buradan yapabilirsiniz ama aşırı istek atacağı için sistemi yorar. 
   // Foreach döngüsü ile sorgularınızı değişkene alın, foreach döngüsü işlemini tamamlandıktan sonra toplu olarak insert işlemini yapın.
   // Aklınızda bulunsun çalıştırdığınız her sorgu bir bağlantı açacağı için işlem sonunda bağlantıyı kapatın  
		  
		  /*
		  $addBrand .= "INSERT INTO TABLO_ADI SET id = '" . $result->id . "', name = '" . $result->name . "',<br>";
		   if(++$i === $total) {
		   $addBrand .= "INSERT INTO TABLO_ADI SET id = '" . $result->id . "', name = '" . $result->name . "';<br>"; 
		 }
		 */

	}
 
    // Database toplu halde insert işlemi burada yapabilirsiniz
	// $this->db->query($addBrand);  
	
	     $page++;
 
		 if (!empty($results->brands)) {
			 
             if ($page > 2) {
				 
			  // Çok fazla marka olduğu için burada işlemi sonlandırıyorum.
			  die;	 
			 
			 }
			 
			return  TrendyolMarkalar(1, $page);
			 
		 }	else {
			echo " Bitti ";
		 }
	     
	}


	TrendyolMarkalar(1,0);
