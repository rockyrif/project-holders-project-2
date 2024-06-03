<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading Animation Example</title>
  <style>
    /* Loader styles */
    .loader {
      border: 16px solid #f3f3f3; /* Light grey */
      border-top: 16px solid #3498db; /* Blue */
      border-radius: 50%;
      width: 120px;
      height: 120px;
      animation: spin 2s linear infinite;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    body.loaded .loader {
      display: none;
    }

    /* Optionally, add a background overlay */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      z-index: 9998;
    }
  </style>
</head>
<body>
  <div id="loader" class="loader"></div>
  <div class="overlay"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.remove('loaded');
    });

    window.addEventListener("load", function() {
      setTimeout(function() {
        document.body.classList.add('loaded');
      }, 2000); // Simulate a 2-second loading delay
    });
  </script>

  <!-- Your website content here -->
  <h1>Welcome to My Website</h1>
  <p>This is an example of a loading animation.</p>
</body>
</html>
