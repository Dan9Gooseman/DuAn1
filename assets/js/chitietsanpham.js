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
		if (newval < min) {
			newval = min;
		} else if (newval > max) {
			newval = max;
		}
		num.value = Number(newval);
		e.preventDefault();
	}

	function fnplus(e) {
		var current = Number(num.value);
		var newval = (current + step);
		if (newval > max) newval = max;
		num.value = Number(newval);
		e.preventDefault();
	}

	minus.addEventListener('click', fnminus);
	plus.addEventListener('click', fnplus);

}
//////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function () {
	var radios = document.getElementsByName('btnradio');
	radios.forEach(function (radio) {
		radio.addEventListener('input', function () {
			var dungtich = document.querySelector('input[name="btnradio"]:checked').value;
			var sp_id = document.querySelector('input[name="sp_id"]').value;
			var xhr = new XMLHttpRequest();
			xhr.open('GET', `Model/getvariant.php?sp_id=${sp_id}&dungtich=${dungtich}`, true);
			xhr.onreadystatechange = function () {
				if (xhr.readyState == 4 && xhr.status == 200) {
					var responseData = JSON.parse(xhr.responseText);
					// console.log(responseData);
					document.getElementById('tensanpham').innerText = responseData['btsp_ten'];		
					document.getElementById('giatien').innerText = numberFormat(responseData['btsp_giatien'])+' đ';			
				}
			};
			xhr.send();
		})
	})
})

function numberFormat(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

////////////////////////////////////////

