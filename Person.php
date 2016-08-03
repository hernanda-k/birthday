<?php

       /**
	* Class Person
	* created at 	08.07.16 
	* last updated 	14.07.16
	* @author 	Alex
	* @copyright 	Copyright (c) 2013 - 2016, LUMUT
    	* @copyright	Copyright (c) 2013 - 2016, R.D.U
	* @version 	4.8.9.8
	*/
	
 	class Person {
 		public $name;
 		public $birth_date;
 		public $wish;

 		public function __construct($name,$date) {
 			$this->name 		= $name;
 			$this->birth_date 	= $date;
 		}

 		public function set_wish($wish){
 			$this->wish	= $wish;
 		}

 		public function get_name() {
 			return $this->name;
 		}

 		public function get_birth_date() {
 			return $this->birth_date;
 		}

 		public function get_wish(){
 			return $this->wish;
 		}

 		public function get_age(){
 			$now		= new DateTime(date('Y-m-d'));
 			$birth_date	= new DateTime($this->birth_date);
 			
 			return $now->diff($birth_date)->format('%y');
 		}
 	}
