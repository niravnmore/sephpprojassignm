<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 10px;
        }

        .sidebar {
            grid-area: sidebar;
        }

        .content {
            grid-area: content;
        }

        .header {
            grid-area: header;
        }

        .footer {
            grid-area: footer;
        }

        .wrapper {
            background-color: #eeeeee;
            color: #444;
            padding: 10px;
            margin: auto;
            display: grid;
            grid-gap: 1em;
            grid-template-areas:
                "header" "sidebar" "content" "footer";
        }

        @media only screen and (min-width: 500px) {
            .wrapper {
                grid-template-columns: 20% auto;
                grid-template-areas:
                    "header   header" "sidebar  content" "footer   footer";
            }
        }

        @media only screen and (min-width: 600px) {
            .wrapper {
                grid-gap: 20px;
                grid-template-columns: 250px auto;
                grid-template-areas:
                    "header  header" "sidebar content" "footer  footer";
                max-width: 1200px;
            }

        }

        .box {
            background-color: #444;
            color: #ffffff;
            border-radius: 5px;
            padding: 10px;
            font-size: 20px;
        }

        .header,
        .footer {
            background-color: blue;
        }

        .sidebar {
            background-color: #ccc;
            color: #444;
        }

        .content {
            background: rgb(16, 160, 179);
        }

        .product {
            border: 3px green solid;
            background: darkgreen;
            margin: 10px;
            padding: 10px;
            text-align: center;
        }

        .product-name {
            font-weight: bold;
            color: #007bff;
        }

        .product-price {
            color: #28a745;
            font-weight: bold;
        }

        .product-description {
            color: white;
        }

        .p-5 {
            padding: 5px;
        }

        .m-5 {
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="box header">
            <?php include('header2.php'); ?>
            <p>Create a responsive layout using CSS Grid or Flexbox.</p>
        </div>
        <div class="box sidebar">
            <?php include('nav.php'); ?>
        </div>
        <div class="box content">
            <?php include('LE_64data.php'); ?>
        </div>
        <div class="box footer">
            <?php include('footer.php'); ?>
        </div>
    </div>
</body>

</html>