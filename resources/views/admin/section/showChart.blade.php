<canvas id="{{$name}}"  width="400" height="400" data-item="asd"></canvas>
<script>
    var label=(<?php echo json_encode($label)?>);
    var data=(<?php echo json_encode($data)?>);
    var ctx = document.getElementById("{{ ($name) }}").getContext('2d');
    var myChart = new Chart(ctx, {
        type: "{{($type)}}",
        data: {
            labels: label,
            datasets: [{
                label: 'تعداد',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>