<?php
// Function to get current time in HH:MM:SS format
function getDigitalClock() {
    return date("H:i:s");
}
?>

<!-- Display the digital clock -->
<div id="digital-clock-container">
    <span id="digital-clock"><?= getDigitalClock() ?></span>
</div>

<!-- Optional: Add some styling -->
<style>
#digital-clock-container {
    position: fixed;
    top: 10px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    font-size: 24px;
    font-weight: bold;
}
</style>
