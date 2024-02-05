<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
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
            <div 
                class="main__block-css" 
                style="background-color: #08040d;"
            >
                <div class="contents main__block-sub-block-css">
                    <div>
                        <div class="contents__title">
                            Data-driven B2B Lead Research service, streamlining your prospect qualification stage, enabling you to dive deeper into strategic negotiation endeavors.
                        </div>
                    </div>
                <div class="contents__image-block">
                    <img src="./image/index-page/main-image.png" class="contents__image-block-img">
                </div>
            </div>
            </div>        

            <div class="main__block-css" style="background-color: #fff;">
                <div class="main__block-sub-block-css">
                    <div class="advantages">
                        <div class="advantages__image-block">
                            <img src="./image/index-page/graph-image.png" class="advantages__image-block-img">
                        </div>
                        <div style="margin: auto 0;">
                            <div class="Our-Advantages">
                                <div class="Our-Advantages__number">1.</div>
                                <div>
                                    <div class="Our-Advantages__title">Strategic Partnership</div>
                                    <div class="Our-Advantages__text">
                                        Collaborating with us is more than just a transaction—it's a strategic partnership. 
                                        We work hand in hand with you to understand your unique needs and develop personalized solution.
                                    </div>
                                </div>
                            </div>
        
                            <div class="Our-Advantages">
                                <div class="Our-Advantages__number">2.</div>
                                <div>
                                    <div class="Our-Advantages__title">Next-Gen Technologies</div>
                                    <div class="Our-Advantages__text">
                                        Harness state-of-the-art technologies to optimize your lead qualification process. 
                                        Our innovative solutions will keep you one step ahead of the competition.
                                    </div>
                                </div>
                            </div>
        
                            <div class="Our-Advantages">
                                <div class="Our-Advantages__number">3.</div>
                                <div>
                                    <div class="Our-Advantages__title">Personalized Approach</div>
                                    <div class="Our-Advantages__text">
                                        Every business is unique, and we understand that. Our solution are tailored to your industry specifics 
                                        and delivered with consideration for your goals and strategies.
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