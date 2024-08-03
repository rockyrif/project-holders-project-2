<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

// File paths
$totalFile = $document_root . '/total_visits.txt';
$dailyFile = $document_root . '/daily_visits.txt';
$monthlyFile = $document_root . '/monthly_visits.txt';

// Load or initialize visit counters
$totalVisits = file_exists($totalFile) ? file_get_contents($totalFile) : 0;
$dailyVisits = file_exists($dailyFile) ? json_decode(file_get_contents($dailyFile), true) : [];
$monthlyVisits = file_exists($monthlyFile) ? json_decode(file_get_contents($monthlyFile), true) : [];

// Get current date information
$currentDay = date('Y-m-d');
$currentMonth = date('Y-m');

// Increment total visits
$totalVisits++;

// Check if the visitor has a 'counter' cookie set (to prevent counting multiple visits in a single day)
if (!isset($_COOKIE['counter'])) {
  // Increment daily visits
  if (!isset($dailyVisits[$currentDay])) {
    $dailyVisits[$currentDay] = 0;
  }
  $dailyVisits[$currentDay]++;

  // Increment monthly visits
  if (!isset($monthlyVisits[$currentMonth])) {
    $monthlyVisits[$currentMonth] = 0;
  }
  $monthlyVisits[$currentMonth]++;

  // Save the updated counters back to their respective files
  file_put_contents($totalFile, $totalVisits);
  file_put_contents($dailyFile, json_encode($dailyVisits));
  file_put_contents($monthlyFile, json_encode($monthlyVisits));

  // Set a cookie to mark this visitor as counted, with a 1-day expiration
  setcookie('counter', '1', (time() + 86400));
}

// Output the current counts
echo "<h2>Total Visits: $totalVisits</h2>";
echo "<h2>Today's Visits: " . $dailyVisits[$currentDay] . "</h2>";
echo "<h2>This Month's Visits: " . $monthlyVisits[$currentMonth] . "</h2>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading Animation Example</title>

  <style>
    .container-visitor-counter {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 60px;
    }

    .counter-box {
      padding: 10px;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      display: inline-block;
      margin: 10px;
      display: block;
    }

    h2 {
      color: #333;
    }

    .count {
      font-size: 30px;
      color: #007BFF;
    }
  </style>

</head>

<div class="container-visitor-counter">
  <h1>Visitor Counter</h1>
  <div class="counter-box">
    <h2>Total Visits</h2>
    <div class="count"><?php echo $totalVisits; ?></div>
  </div>
  <div class="counter-box">
    <h2>Today's Visits</h2>
    <div class="count"><?php echo $dailyVisits[$currentDay]; ?></div>
  </div>
  <div class="counter-box">
    <h2>This Month's Visits</h2>
    <div class="count"><?php echo $monthlyVisits[$currentMonth]; ?></div>
  </div>
</div>

</html>