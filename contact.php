<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.html'; ?>
</head>
<body>
<!-- Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Contact Us</h1>
    <p class="lead">Feel free to reach out to us for any inquiries or to schedule a visit.</p>
  </div>
</div>

<!-- Contact Section -->
<section id="contact" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Contact Information</h2>
        <p>123 Elder Street,<br>Ahmednagar, Maharashtra, India</p>
        <p>Email: info@elderchildcare.com<br>Phone: +91 98765 43210</p>
      </div>
      <div class="col-md-6">
        <h2>Visit Us</h2>
        <div id="map" style="height: 300px;"></div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.html'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.html'; ?>
</head>
<body>
<!-- Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Contact Us</h1>
    <p class="lead">Feel free to reach out to us for any inquiries or to schedule a visit.</p>
  </div>
</div>

<!-- Contact Section -->
<section id="contact" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Contact Information</h2>
        <p>123 Elder Street,<br>Ahmednagar, Maharashtra, India</p>
        <p>Email: info@elderchildcare.com<br>Phone: +91 98765 43210</p>
      </div>
      <div class="col-md-6">
        <h2>Visit Us</h2>
        <div id="map" style="height: 300px;"></div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.html'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
  // Initialize Leaflet map
  var map = L.map('map').setView([19.0944, 74.7384], 13); // Coordinates for Ahmednagar, Maharashtra, India

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker([19.0944, 74.7384]).addTo(map)
    .bindPopup('Elder & Child Care Center - Ahmednagar, Maharashtra, India')
    .openPopup();
</script>
</body>
</html>
