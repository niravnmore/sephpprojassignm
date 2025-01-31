<?php include('navbar.php'); ?>
<!-- <p>Apply CSS styles to a PHP web application.</p> -->

<!-- login page -->
<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Login</h3>
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="form-control btn btn-primary">Login</button>
                        </form>

                        <div class="mt-3 d-flex justify-content-between">
                            <a href="forgot-password.php">Forgot password?</a>
                            <span>
                                Don't have an account? <a href="register.php">Create an account</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</div>
<?php include('footer.php'); ?>