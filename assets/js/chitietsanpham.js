

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
					document.getElementById('giatien').innerText = numberFormat(responseData['btsp_giatien']) + ' đ';
					document.getElementById('btspID').setAttribute('value', parseInt(responseData['btsp_id']));
					document.getElementById('soluongconlai').innerText = 'Số lượng còn lại : ' + parseInt(responseData['btsp_soluongconlai']);
				}
			};
			xhr.send();
		})
	})
})

////////////////////////////////////////
function numberFormat(number) {
	return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

////////////////////////////////////////

var submit = document.getElementById('submit1');
submit.addEventListener('click', (e) => {
    e.preventDefault();
    const btsp_id = document.querySelector('#btspID').value;
    const soluong = document.querySelector('#num').value;

    // Check if btsp_id is not blank or null
    if (btsp_id !== null && btsp_id.trim() !== "") {
		var xhr1 = new XMLHttpRequest();
		xhr1.onreadystatechange = function(){
			if(xhr1.readyState == 4 && xhr1.status == 200){
				// console.log(xhr1.responseText);
				var responseData1 = JSON.parse(xhr1.responseText);
        		console.log(responseData1);

			}
		}
		xhr1.open('GET', `Model/themvaogiohang.php?btsp_id=${btsp_id}&soluong=${soluong}`,true);
		xhr1.send();
		Swal.fire({
			title: 'Success',
			text: 'Đã thêm vào giỏ hàng',
			icon: 'success',
			confirmButtonText: 'OK'
		  });
    } else {
        Swal.fire({
			title: 'Error!',
			text: 'Hãy chọn dung tích sản phẩm',
			icon: 'error',
			confirmButtonText: 'OK'
		  });
    }
});

////////////////////////////////////////////////////////

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