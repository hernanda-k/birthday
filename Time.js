/**
 * File Time.js
 * created at 	14.07.16  
 * last updated 15.07.16
 * @author 		Alex 
 * @copyright	Copyright (c) 2013 - 2016, LUMUT
 * @copyright	Copyright (c) 2013 - 2016, R.D.U
 * @version 	4.8.9.8
 */

var $ = function(q) { return document.querySelector(q); }

function add_zero(q) {
	return (q.toString().length==1) ? "0" + q : q;
}

function date_difference(date_format){
	now 	= new Date();
	next 	= new Date(date_format);
	
	next.setYear(now.getFullYear());

	if (next < now) {
		next.setYear(now.getFullYear()+1);
	}

	next.setHours(0);
	next.setMinutes(0);
	next.setSeconds(0);

	secs = (next - now)/1000;

	s 	= Math.floor(secs % 60);
	m 	= Math.floor(secs/60) % 60;
	h 	= Math.floor(secs/60/60) % 24;
	d 	= Math.floor(secs/60/60/24);

	return {'days' : add_zero(d),'hours' : add_zero(h),'minutes' : add_zero(m),'seconds' : add_zero(s)};
}