<?php 
namespace Classes;

class Roulete {

	public function spin(){
		 //Gatcha Sistem
		$items = [	'SSR ITEM' => 0.1,
					'SSR ITEM 2' => 0.2,
					'SSR ITEM 3' => 0.3,
					'SSR ITEM 4' => 0.4,
					'SR ITEM 1' => 0.5,
					'SR ITEM 2' => 0.6,
					'SR ITEM 3' => 1.2,
					'item 8' => 2,
					'item 9' => 2.8,
					'item 10' => 3.6,
					'item 11' => 4.4,
					'item 12' => 5.2,
					'item 13' => 6,
					'item 14' => 6.8,
					'item 15' => 7.6,
					'item 16' => 8.4,
					'item 17' => 9.2,
					'item 18' => 10,
					'item 19' => 10.8,
					'item 20' => 11.6,
					'item 21' => 8.3,

					];///Persen kemungkinan
		if(date("Ymd")=="20190615"){
			
			$items["SSR ITEM"] *= 5;
			// echo $items["SSR ITEM"];
		}

	$max = 0;
	foreach ($items as $key => $value) {
		$max += $value;
		// echo  $max."<br>";
		$items[$key] = $max;
	}

	$random = mt_rand(1,$max);

		foreach ($items as $item => $max)
		{
			if ($random <= $max){
			// echo $random."<".$max;
				break;
			}
		}
		 return $item;
	}
}