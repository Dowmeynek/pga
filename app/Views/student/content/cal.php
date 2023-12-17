<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Add your styles here -->
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    #clock-container {
      position: fixed;
      top: 60px;
      right: 10px;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    #clock,
    #date {
      font-size: 1.2em;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div id="clock-container">
    <div id="clock"></div>
    <div id="date"></div>
  </div>

  <!-- Add your scripts here -->
  <script>
    function updateClockAndDate() {
      var now = new Date();

      // Update clock
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      var timeString = hours + ':' + minutes + ':' + seconds;
      document.getElementById('clock').innerText = timeString;

      // Update date
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      var dateString = now.toLocaleDateString(undefined, options);
      document.getElementById('date').innerText = dateString;
    }

    // Update the clock and date every second
    setInterval(updateClockAndDate, 1000);

    // Initial call to display the clock and date immediately
    updateClockAndDate();
  </script>

</body>
</html>
