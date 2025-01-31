<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="comtent">
                    <form action="validate.php" method="post">
                        <table class="table">
                            <tr>
                                <td><label class="form-control" for="fname">First Name</label></td>
                                <td><input class="form-control" type="text" id="fname" name="fname"
                                        placeholder="Your name..">
                                </td>
                            </tr>
                            <tr>
                                <td><label class="form-control" for="lname">Last Name</label></td>
                                <td><input class="form-control" type="text" id="lname" name="lname"
                                        placeholder="Your last name.."></td>
                            </tr>
                            <tr>
                                <td><label class="form-control" for="email">Email</label></td>
                                <td><input class="form-control" type="text" id="email" name="email"
                                        placeholder="Your email..">
                                </td>
                            </tr>
                            <tr>
                                <td><label class="form-control" for="message">Message</label></td>
                                <td><textarea class="form-control" id="message" name="message"
                                        placeholder="Write something.." required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="form-control" for="country">Country</label></td>
                                <td><select class="form-control" id="country" name="country" required>
                                        <option value="">Select Country</option>
                                        <option value="india">India</option>
                                        <option value="australia">Australia</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                            </tr>
                        </table>
                        <input class="form-control submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>