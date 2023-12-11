<!-- app/Views/chart_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?= $this->include('cssJS/head') ?>
</head>
<body>
<?= $this->include('home/topbar') ?> 
<?= $this->include('home/navbar') ?>
    <div style="width: 50%; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // Get chart data from PHP
        var chartData = <?php echo json_encode($chartData); ?>;

        // Extract subjects and grades from the data
        var subjects = chartData.map(item => item.subject);
        var grades = chartData.map(item => item.grade);

        // Create a bar chart using Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: subjects,
                datasets: [{
                    label: 'Grades',
                    data: grades,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<?= $this->include('cssJS/js') ?>
</body>
</html>
