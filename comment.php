<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Komen anda</title>
    <link rel="stylesheet" href="css/style2.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Light background for better contrast */
            font-family: Arial, sans-serif;
        }

        nav {
            width: 100%;
            background-color: #007bff; /* Bootstrap primary color */
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff; /* White text color for contrast */
            font-weight: bold;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1; /* Allow main to take up remaining space */
            width: 100%;
        }

        .form-container {
            background: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            text-align: center;
            width: 300px; /* Fixed width for better form layout */
        }

        .form-container h1 {
            color: #343a40; /* Dark color for better readability */
            margin-bottom: 20px;
        }

        .form-container form {
            text-align: center;
        }

        .form-container input, .form-container textarea {
            display: block;
            width: calc(100% - 20px); /* Full width minus padding */
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #ced4da; /* Light border for input elements */
            border-radius: 5px; /* Rounded corners for inputs */
        }

        .form-container textarea {
            resize: none; /* Disable resizing of textarea */
        }

        .form-container input[type="submit"] {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .form-container .radio-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="Photo_Gallery.php">Photo Gallery</a></li>
            <li><a href="Page_2.php">Education</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="comment.php">Comment</a></li>
            <li><a href="calculator.php">Calculator</a></li>
        </ul>
    </nav>

    <main>
        <div class="form-container">
            <h1>Borang Komen</h1>
            <form action="Comment.php">
                <input type="text" name="Nama" placeholder="Nama anda"><br>
                <div class="radio-group"-->
                    <label><input type="radio" name="gender" value="Lelaki" checked>Lelaki</label>
                    <label><input type="radio" name="gender" value="female">Perempuan</label>
                </div>
                <input type="text" name="Emel" placeholder="Emel anda"><br>
                <textarea name="Komen" placeholder="Masukkan komen anda disini" style="width:200px; height:100px;"></textarea><br>
                <input type="submit" value="Hantar">
            </form>
        </div>
    </main>
</body>
</html>



    <!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Bunker</h4>
					<p>
						No 78, Jalan Desa 4/10,<br/>
						Bandar Country Homes,  <br/>
						48000, Rawang,         <br/>
                        Selangor Darul Ehsan.
					</p>
				</div><!-- /col-lg-4 -->
				
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
					<<p>I love studying Science Computer and Programming Interactive System.</p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
</body>
</html>