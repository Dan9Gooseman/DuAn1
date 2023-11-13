var num = document.querySelector('#num');
var minus = document.querySelector('#minus');
var plus = document.querySelector('#plus');

if (num !== undefined && minus !== undefined && plus !== undefined && num !== null && minus !== null && plus !== null) {
	
	var min = Number(num.getAttribute('min'));
	var max = Number(num.getAttribute('max'));
	var step = Number(num.getAttribute('step'));

	function fnminus(e) {
		var current = Number(num.value);
		var newval = (current - step);
		if(newval < min) {
			newval = min;
		} else if(newval > max) {
			newval = max;
		} 
		num.value = Number(newval);
		e.preventDefault();
	}

	function fnplus(e) {
		var current = Number(num.value);
		var newval = (current + step);
		if(newval > max) newval = max;
		num.value = Number(newval);
		e.preventDefault();
	}
		
	minus.addEventListener('click', fnminus);
	plus.addEventListener('click', fnplus);
  
}