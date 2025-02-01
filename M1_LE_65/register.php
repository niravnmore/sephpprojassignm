<?php include('navbar.php'); ?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-dark border-4">
                    <div class="card-body">
                        <h3 class="text-center">Register</h3>
                        <form action="register.php" method="POST">
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                            </div>
                            <button type="submit" class="form-control btn btn-primary btn-lg">Register</button>
                        </form>

                        <div class="mt-3 d-flex justify-content-between">
                            <span>
                                Already have an account? <a href="login.php">Login</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>