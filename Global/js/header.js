function numberFormat(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
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
            responseData.forEach(function (item) {
                var resultElement = document.createElement('div');
                resultElement.innerHTML = `
                        <div class="search-result-box">
                            <div><img class="box-img" src="assets/uploads/${item.sp_img}"></div>
                            <div>
                            <a href="index.php?act=chitietsanpham&sp_id=${item.sp_id}" class="search-result-link">${item.sp_ten}</a>
                            <p>${numberFormat(item.min_giatien)} - ${numberFormat(item.max_giatien)} đ</p>
                            </div>
                        </div>
                    `;
                    var linkElement = resultElement.querySelector('.search-result-link');
                    linkElement.addEventListener('click', function (event) {
                        event.preventDefault(); 
                        window.location.href = linkElement.href;
                    });
                document.getElementById('search-result').appendChild(resultElement);
            });
        }
    };
    xhr.send();
})
document.addEventListener('DOMContentLoaded', function () {
    var timkiem = document.getElementById('timkiem');
    var searchResult = document.getElementById('search-result');

    // Event listener for the input to show search results
    timkiem.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the document click event from closing the results
        searchResult.style.display = 'block';
    });

    // Event listener for the document to close search results when clicking outside
    document.addEventListener('click', function (event) {
        searchResult.style.display = 'none';
    });

    // Prevent closing the results when clicking inside the search result container
    searchResult.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the document click event from closing the results
    });

    // Your existing code for fetching and displaying search results...
});