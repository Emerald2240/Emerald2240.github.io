<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/fa/css/font-awesome.css">
</head>

<body>
    <div class="container">
        <h1>ORJI MICHAEL CHUKWUEBUKA</h1>

        <div class="details-contact">
            <div class="contact-details">
                <h3>CONTACT</h3>
                    <p>Orjimichael4886@gmail.com</p>
                    <p>Tel: +234-814-886-3871</p>
            </div>
            <div class="form-section">

                <div class="form-control">
                    <label for="first-name">First Name</label>
                    <input id="first-name" type="text">
                </div>

                <div class="form-control">
                    <label for="e-mail">Email*</label>
                    <input id="e-mail" type="email"></div>

                <div class="form-control">
                    <label for="subject">Subject</label>
                    <input id="subject" type="text"></div>

                <div class="form-control">
                    <label for="leave-message">Leave me a message</label>
                    <textarea id="leave-message"></textarea>
                </div>

                <div class="form-control">
                    <input type="submit" value="Submit">
                </div>

            </div>
        </div>
        <div class="navbar">
        <?php
       require_once"includes/header.php";
       ?>
        </div>
    
        <footer class="footer">&copy 2020 Orji Michael. Proudly Created With HTML, CSS and Javascript
        </footer>
    </div>
    <script src="jquery.js"></script>
    <script src="page.js"></script>
</body>

</html>