<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get User Location</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
    #location-output {
      margin-top: 20px;
      font-size: 18px;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h1>Get User Location</h1>
  <p id="location-output">Fetching your location...</p>

  <script>
   const options = {
  enableHighAccuracy: true,
  timeout: 100000,
  maximumAge: 0,
};

function success(pos) {
  const crd = pos.coords;

  console.log("Your current position is:");
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);
   // Display the coordinates
   var locationOutput = document.getElementById("location-output");
    locationOutput.textContent = "Latitude: " + crd.latitude + ", Longitude: " + crd.longitude;
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error, options);

  </script>
</body>
</html>