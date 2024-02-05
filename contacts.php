<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacts.css">
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
                    <div>
                    <div class="contacts-legal-Notice contacts__style">
                        <div class="contacts-legal-Notice__title">
                            Contact
                        </div>
                        <div class="contacts-legal-Notice__box">
                            <div class="contacts-legal-Notice__box-content"> 
                                Phone numbers: <div style = "margin-left: 10px;">+374 91 68 75 43 <br> +370 644 68 404</div>
                            </div>
                            <div class="contacts-legal-Notice__box-content">
                                Email: harut@loqsh.net
                            </div>
                            <div class="contacts-legal-Notice__in-icon">
                                <span class="contacts-legal-Notice__in-icon-link linkedin-icon" target = "new-window">
                                    <span class="icon-linkedin-icon-1 contacts-legal-Notice__icon-linkedin-icon-1"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="contacts-legal-Notice legal-Notice__style">
                        <div class="contacts-legal-Notice__title">
                            Legal Notice
                        </div>
                        <div class="contacts-legal-Notice__box">
                            <div class="contacts-legal-Notice__box-content"> 
                                Registration Address: Armenia, Vanadzor
                            </div>
                            <div class="contacts-legal-Notice__box-content"> 
                                TIN: 67066738
                            </div>
                            <div class="contacts-legal-Notice__box-content">
                                Refference: 
                                <span 
                                    style = "text-decoration: none; color: #08040d; margin-left: 5px; cursor: pointer;"
                                    class = "refference-new-window"
                                >
                                    https://src.taxservice.am
                                </span>
                            </div>
                        </div>
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