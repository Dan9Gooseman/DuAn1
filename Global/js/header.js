// document.addEventListener('DOMContentLoaded', function () {
    var timkiem = document.getElementById('timkiem');
    timkiem.addEventListener('input', () => {
        // console.log(timkiem.value);
        var tukhoa = timkiem.value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `Global/search.php?tukhoa=${tukhoa}`, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var responseData = JSON.parse(xhr.responseText);
                // console.log(responseData);
                document.getElementById('search-result').innerText = "";
                responseData.forEach(function(item) {
                    var resultElement = document.createElement('div');
                    resultElement.innerHTML = `
                        <p>sp_id: ${item.sp_id}</p>
                        <p>sp_ten: ${item.sp_ten}</p>
                        <p>min_giatien: ${item.min_giatien}</p>
                        <p>max_giatien: ${item.max_giatien}</p>
                        <hr>
                    `;
                    document.getElementById('search-result').appendChild(resultElement);
                });				
            }
        };
        xhr.send();
    })
        //  var tukhoa = document.querySelector('input[name="timkiem"]').value;
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.open('GET', `Global/search.php?tukhoa=${tukhoa}`, true);
		// 	xhr.onreadystatechange = function () {
		// 		if (xhr.readyState == 4 && xhr.status == 200) {
		// 			var responseData = JSON.parse(xhr.responseText);
		// 			// console.log(responseData);
		// 			document.getElementById('tensanpham').innerText = responseData['btsp_ten'];		
		// 			document.getElementById('giatien').innerText = numberFormat(responseData['btsp_giatien'])+' đ';			
		// 		}
		// 	};
		// 	xhr.send();
    // })
// })