<?php require_once 'include/headers.php'?>
<div class="container col-5 mt-3 p-4 shadow">
<form action="/process-login.php" novalidate="" method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<?php require_once 'include/footers.php'?>  


