<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator and Calendar</title>
    <link rel="stylesheet" href="css/calc.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        form input, form select, form button {
            display: block;
            margin: 10px auto;
        }

        .result {
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 40px; /* Add space below the result box */
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            width: fit-content;
        }

        #footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        #footer .container .row .col-lg-4 h4, #footer .container .row .col-lg-4 p {
            color: #fff;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="Photo_Gallery.html">Photo Gallery</a></li>
            <li><a href="Page_2.html">Education</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="comment.html">Comment</a></li>
            <li><a href="calculator.html">Calculator</a></li>
        </ul>
    </nav>

    <center>
        <h1>Calculator</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="First Number" required>
            <select name="operation" required>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number" required>
            <button type="submit" name="calculate">Calculate</button>
        </form>
    </center>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<div class='result'>Division by zero is not allowed.</div>";
                    return;
                }
                break;
        }
        echo "<div class='result'>Result: $result</div>";
    }
    ?>

    <!-- +++++ Footer Section +++++ -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>My Bunker</h4>
                    <p>
                        No 78, Jalan Desa 4/10,<br/>
                        Bandar Country Homes,<br/>
                        48000, Rawang,<br/>
                        Selangor Darul Ehsan.
                    </p>
                </div>

                <div class="col-lg-4">
                    <h4>My Links</h4>
                    <p>
                        <a href="https://www.youtube.com/watch?v=vfc42Pb5RA8" target="_blank">YouTube</a><br/>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Twitter</a><br/>
                        <a href="https://www.youtube.com/watch?v=GPXkjtpGCFI" target="_blank">TikTok</a>
                    </p>
                </div>

                <div class="col-lg-4">
                    <h4>About Me</h4>
                    <p>I love studying Science Computer and Programming Interactive System.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
