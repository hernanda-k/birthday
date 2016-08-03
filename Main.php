<?php
 
       /**
	* File Main
	* created at 	11.07.16
	* last updated 	04.08.16
	* @author 	Alex
	* @copyright	Copyright (c) 2013 - 2016, LUMUT
    	* @copyright	Copyright (c) 2013 - 2016, R.D.U
    	* @version 	4.8.9.8
	*/
	
	date_default_timezone_set('Asia/Makassar');

	require("Person.php");
	require("BirthDay.php");

	$you	= new Person('Hernanda Kartika','1998-08-04');
	$me 	= new Person('Trio Putra','1998-05-16');

	$happy_birth_day 	= new BirthDay();

	$me->set_wish('Semoga bisa mencapai cita - cita <br/>Betah di Ilkom (<strike>Ilmu Komputer</strike> Ilmu Komunikasi)<br/> Membanggakan orang tua <br/>Gak lupa kalau pernah ngoding<br/>Gak lupa sama R.D.U<br/>Wish You All The Best<br/>');
	
	$happy_birth_day->to($you)->from($me);
