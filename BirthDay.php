<?php

   /**
	* Class BirthDay
	* created at 	14.07.16  
	* last updated 	15.07.16
	* @author 		Alex 
	* @copyright	Copyright (c) 2013 - 2016, LUMUT
    * @copyright	Copyright (c) 2013 - 2016, R.D.U
    * @version 		4.8.9.8
	*/
	
 	class BirthDay {
 		public $to;
 		public $from;

 		public function to(Person $to) {
 			$this->to 	= $to;
 			return $this;
 		}

 		public function from(Person $from) {
			$this->from	= $from;
 			$this->happy_birth_day();
 		}

 		private function happy_birth_day() {
 			$to 		= $this->to;
 			$from 		= $this->from;
 			$now 		= new DateTime(date('Y-m-d'));
 			$birth_date = new DateTime($to->get_birth_date());

 			if ($birth_date->format('m-d') == $now->format('m-d')) {
 				echo 'Selamat ulang tahun <b>'. $to->get_name() .'</b> yang ke-'. $to->get_age() .' Tahun';
 				echo '<br/>';
 				echo $from->get_wish();
 				echo ' - '. $from->get_name();
 			} else {
 				echo '<script src="Time.js"></script>';
 				echo '<p id="interval"></p>';
 				echo '<script>';
 				echo 'setInterval(function(){
 						var diff = date_difference("'.$to->get_birth_date().'");
 						var str_diff  = (parseInt(diff.days)) ? diff.days + " Days " : "";
 							str_diff += (parseInt(diff.hours)) ? diff.hours + " Hours " : "";
 							str_diff += (parseInt(diff.minutes)) ? diff.minutes + " Minutes " : "";
 							str_diff += (parseInt(diff.seconds)) ? diff.seconds + " Seconds" : "";
 						$("#interval").innerHTML = str_diff + " lagi untuk ulang tahun '. $to->get_name() .' yang ke-'. ($to->get_age()+1) .' Tahun";
 					  	},1000);';
 				echo '</script>';	
 			}
 		}
 	}