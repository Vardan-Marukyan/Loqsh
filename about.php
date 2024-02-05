<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="./image/icon/style.css">
    <title>Loqsh</title>
    <link rel="shortcut icon" href="/image/logo/150px/Artboard58.png" type="image/png">
</head>
<body class="body">
    <div class="warper">
        <?php
            include "./components/header.php"
        ?>

        <div class="main">
            <div class="main__block-css">
                <div class="main__block-sub-block-css">
                    <div class="aboutUS">
                        <div class="aboutUS__title">
                            About us
                        </div>
                        <div class="aboutUS__text"> 
                            Welcome to our Data-Driven B2B Lead Research Service, your solution to Prospect Qualification challenges. Backed by over a year of experience in the 
                            Lead Research field, we guarantee time savings during the qualification stage. 
                            Rethink your priorities as we manage the groundwork, empowering you to dive into the intricacies of negotiation with heightened focus.
                        </div>
                    </div>
                </div>
            </div>

            <?php
                include "./components/mail.php"
            ?>
        </div>

        <?php
            include "./components/footer.php"
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./jsCode/script.js"></script>
    <script src="./jsCode/mailHandler.js"></script>
</body>
</html>