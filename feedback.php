<!DOCTYPE html>
<html lang="en">
<?php include 'header.html'; ?>

  <div class="image-container">
<!-- Navbar -->

<div class="container mt-4">
  <h2>Feedback</h2>
  <p>We value your feedback! Please let us know how we're doing:</p>
  <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" required>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea class="form-control" id="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button><br><br><br><br><br><br><br>
  </form>
</div>
</div>
<?php include 'footer.html'; ?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
