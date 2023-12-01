<div class="row">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<canvas id="myChart" style="width:100%;max-width:1500px;"></canvas>

<script>
var xValues = <?php echo json_encode(array_column($listsptop, 'sp_ten')); ?>;
var yValues = <?php echo json_encode(array_column($listsptop, 'sp_luotmua')); ?>;
var barColors = ["red", "green", "blue", "orange", "brown","teal", "pink", "lime", "grey", "maroon"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "BIỂU ĐỒ THỐNG KÊ TOP SẢN PHẨM BÁN CHẠY"
    }
  }
});
</script>
</div>

