<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/service.css">
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
                    <div class="cards__title"><div class ="cards__title-sub">How the process looks like?</div></div>
                    <div class="cards">
                        <div class="card__block-css">
                            <div class="card">
                                <div class = "card__number">1</div>
                                <div class="card__image">
                                    <img src="./image/sevice-page/service-image-card-1.png" width="150px">
                                </div>
                                <div class="card__contents">
                                    <div class="card__contents-text">Teaming up with the Partner to formulate the Ideal Customer Profile and Total Addressable Market.</div>
                                </div>
                            </div>

                            <div class="card">
                                <div class = "card__number">2</div>
                                <div class="card__image">
                                    <img src="./image/sevice-page/service-image-card-2.png" width="150px">
                                </div>
                                <div class="card__contents">
                                    <div class="card__contents-text">Once that's done, our skilled experts will kickstart the process of list construction.</div>
                                </div>
                            </div>
                        </div>

                        <div class="card__block-css">
                            <div class="card">
                                <div class = "card__number">3</div>
                                <div class="card__image">
                                    <img src="./image/sevice-page/service-image-card-3.png" width="150px">
                                </div>
                                <div class="card__contents">
                                    <div class="card__contents-text">Upon completion of list building, we'll proceed to analyze and qualify it with contact persona data.</div>
                                </div>
                            </div>

                            <div class="card">
                                <div class = "card__number">4</div>
                                <div class="card__image">
                                    <img src="./image/sevice-page/service-image-card-4.png" width="150px">
                                </div>
                                <div class="card__contents">
                                    <div class="card__contents-text">
                                        Afterward, our regular service entails delivering the partner  fully qualified and verified lists weekly or monthly.
                                    </div>
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