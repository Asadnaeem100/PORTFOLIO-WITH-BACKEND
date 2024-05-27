<?php

include 'header.php';
include 'navbar.php';

?>

<!-- Contact Start -->
<section class="mb-5">
  <div class="py-5">
    <h2 class="text-center">
      <ins>
        <b>
          <i>Contact Us</i>
        </b>
      </ins>
    </h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group py-3">
        <label>Username</label>
        <input type="text" name="user" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group py-2">
        <label>Email:-</label>
        <input type="email" name="email" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group py-2">
        <label>Mobile</label>
        <input type="text" name="mobile" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group py-2">
        <label>Comments</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
<!-- Contact End -->

<?php

include 'footer.php';

?>