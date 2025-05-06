<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <h2>Contact Us</h2>
  <form action="contact-form-handler.php" method="post">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required />
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required />
    </div>
    <div class="mb-3">
      <label>Message</label>
      <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>
  </form>
</div>
<?php include('includes/footer.php'); ?>
