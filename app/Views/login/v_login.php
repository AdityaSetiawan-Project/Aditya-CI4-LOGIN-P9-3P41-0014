<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('template')?>/css/styles.css" rel="stylesheet" />
</head>
<style>
body {
  background-color: #f8f9fa;
}
.card {
  border-radius: 15px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}
.btn-primary {
  border-radius: 20px;
}

footer {
  margin-top: 20px;
}
</style>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100 bg-primary">
    <div class="card shadow-sm p-5">
      <h3 class="text-center mb-4">Login</h3>
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="rememberPassword">
          <label class="form-check-label" for="rememberPassword">Remember Password</label>
        </div>
        <div class="d-flex justify-content-between">
          <a href="#" class="text-decoration-none">Forgot Password?</a>
          <button type="submit" class="btn btn-primary w-50 mt-3">Login</button>
        </div>
      </form>
      <div class="text-center mt-3">
        <p class="mb-0">Need an account? <a href="#" class="text-decoration-none">Sign up!</a></p>
      </div>
    </div>
  </div>
  <footer class="text-center mt-auto">
    <p class="text-white">Copyright © Your Website 2023</p>
    <a href="#" class="text-white text-decoration-none">Privacy Policy · Terms & Conditions</a>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('template')?>/js/scripts.js"></script>
</body>
</html>
