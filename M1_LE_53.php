<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 53</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 53</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Custom Date Formats: Create a script that displays the current date in different formats (e.g., Y-m-d,
                d/m/Y, l, F jS Y).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Custom Date Formats</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-start p-5">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Format</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Y-m-d</td>
                                <td><?php echo date("Y-m-d"); ?></td>
                            </tr>
                            <tr>
                                <td>d/m/Y</td>
                                <td><?php echo date("d/m/Y"); ?></td>
                            </tr>
                            <tr>
                                <td>l</td>
                                <td><?php echo date("l"); ?></td>
                            </tr>
                            <tr>
                                <td>F jS Y</td>
                                <td><?php echo date("F jS Y"); ?></td>
                            </tr>
                            <tr>
                                <td>D, d m Y</td>
                                <td><?php echo date("D, d m Y"); ?></td>
                            </tr>
                            <tr>
                                <td>D, d-M-Y</td>
                                <td><?php echo date("D, d-M-Y"); ?></td>
                            </tr>
                            <tr>
                                <td>D, d-M-Y, H:i:s</td>
                                <td><?php echo date("D, d-M-Y, H:i:s"); ?></td>
                            </tr>
                            <tr>
                                <td>l, d-M-Y, H:i:s, A</td>
                                <td><?php echo date("l, d-M-Y, H:i:s, A"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_ATOM</td>
                                <td><?php echo date("DATE_ATOM"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_COOKIE</td>
                                <td><?php echo date("DATE_COOKIE"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_ISO8601</td>
                                <td><?php echo date("DATE_ISO8601"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_RFC822</td>
                                <td><?php echo date("DATE_RFC822"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_RFC850</td>
                                <td><?php echo date("DATE_RFC850"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_RFC1036</td>
                                <td><?php echo date("DATE_RFC1036"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_RFC1123</td>
                                <td><?php echo date("DATE_RFC1123"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_RFC2822</td>
                                <td><?php echo date("DATE_RFC2822"); ?></td>
                            </tr>
                            <tr>
                                <td>DATE_W3C</td>
                                <td><?php echo date("DATE_W3C"); ?></td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>