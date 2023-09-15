<?php
include ("translate.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"/>
    <script src = "lang-menu.js"></script>
    <script src = "success.js"></script>
    <script src = "slider.js" defer></script>
    <!-- Google tag (gtag.js) --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-945946536"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BWXD62JW2M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        } 
        gtag('js', new Date());
        gtag('config', 'AW-945946536'); 
        gtag('config', 'G-BWXD62JW2M'); 
    </script>
    <title><?=__("Main_title")?></title>
</head>
<body>
    <menu>
        <div class="menu">
            <div class="leftMenu">
                <a href="https://wspolpraca.ottolandingpages.pl/" target="blank">
                    <img src="./images/ASSET_LOGO_OTTO.svg"/>
                </a>
            </div>
            <div class="rightMenu">
                <div>
                    <a href="https://www.ottoworkforce.com"><?= __("title_1") ?></a>
                </div>
                <div>
                    <a href="#page-section1"><?= __("title_2") ?></a>
                </div>
                <div class="siema">
                    <div class="lang-menu"  onclick="pressed('lang-menu')">
                    <div class="selected-lang">
                    <div class="flag"> 
                        <img src=<?= __("img_1") ?>>
                        </div>
                            
                        </div >
                        <ul id="lang-menu" style="display: none;">
                            <li>
                                <a href="translate.php?lang=pl" class="pl">PL</a>
                            </li>
                            <!-- <li>
                                <a href="translate.php?lang=eng" class="eng">EN</a>
                            </li>
                            <li>
                                <a href="translate.php?lang=ua" class="ua">UA</a>
                            </li>
                            <li>
                                <a href="translate.php?lang=ru" class="ru">RU</a>
                            </li> -->
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div style="display: none;" class="burger-menu">
                <div class="bar">
                    <div>
                        <a href="https://www.ottoworkforce.com"><?= __("title_1") ?></a>
                    </div>
                </div>
                <div class="bar">
                    <div>
                        <a href="#page-section1"><?= __("title_2") ?></a>
                    </div>
                </div>
                <div class="bar"></div>
            </div>
            <div class="dropdown-toggle">&#9776;</div>
        </div>
    </menu>
    <div class="box">
        <div class="bg-img">
            <div class="welcome-box">
                <div class="welcome-text">
                <a class="welcome"><b style="color: white;"><?=__("welcome1")?><u style="color: white;"><?=__("welcome2")?></u></b></a>
                </div>
            </div>
            <div id="form" class=formcontent>
                <form action="mail.php" method="post">
                    <div class="form2">
                        <h3><b><?=__("form_1")?></b></h3>
                    </div>
                    <div class="form1">
                        <input type="text" title="<?=__("form_2_error")?>" pattern ="^([\u00c0-\u01ffa-zA-Z]+(\s[\u00c0-\u01ffa-zA-Z]+))+$" class="input1" name="name" placeholder="<?=__("form_2")?>" required>
                    </div>
                    <div class="form1">
                        <input type="text" title="<?=__("form_3_error")?>" pattern="^\+?\d{1,3}[\s.-]?\d{2,3}[\s.-]?\d{2,3}[\s.-]?\d{2,3}$" class="input1" name="phone" placeholder="<?=__("form_3")?>" required>
                    </div>
                    <div class="form1">
                        <input type="text" title="<?=__("form_4_error")?>" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" class="input1" name="email" placeholder="<?=__("form_4")?>" required>
                    </div>
                    <div class="form1">
                        <input type="text" title="<?=__("form_7_error")?>" pattern ="[a-zA-Z]{2,}" class="input1" name="company" placeholder="<?=__("form_7")?>" required>
                        </div>
                    <div class="form1">
                        <input type="text" title="<?=__("form_8_error")?>" pattern ="^((\d{3}[- ]\d{3}[- ]\d{2}[- ]\d{2})|(\d{3}[- ]\d{2}[- ]\d{2}[- ]\d{3}))$" class="input1" name="nip" placeholder="<?=__("form_8")?>" required>
                    </div>
                    <input type="hidden" name="utm" value="<?php echo $_GET['utm_source']?>" />
                    <?php 
                        if(isset($_GET['error'])) {
                            if ($_GET['error']=='server'){
                                echo "<h3>".__('ERROR')."</h3>";
                            } else if ($_GET['error']=='wrongData'){
                                echo "<h3>".__('ERROR')." Data</h3>";
                            } else if ($_GET['error']=='fieldEmpty') {
                                echo "<h3>".__('ERROR')." Empty</h3>";
                            }
                        }
                    ?>
                    <div class="buttonbox">
                        <button type="submit" class="button1" name="wyslij"><?=__("form_5")?></button>
                    </div>
                </form>
                <div id="successform" style = "display:none;">
                    <h3 class="thankyou1"><?=__("thankyou_1")?></h3>
                    <h3 class="thankyou2"><?=__("thankyou_2")?></h3>
                    <h3 class="thankyou3"><?=__("thankyou_3")?></h3>
                    <button type="submit" class="button3" onclick="successFunction(0)"><?=__("return_to_form")?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="site" id="page">
            <div class="content-wrapper">
                <div class="s-img-h">
                    <img src="./images/ASSET_MOB_PIC_Partnerzy.png"/>
                </div>
               <a class="title_question"><b><?=__("label_1")?></b></a>
               <div class="list_image">
                    <div class="list">
                        <ul>
                            <li><?=__("label_2")?></li>
                            <li><?=__("label_3")?></li>
                            <li><?=__("label_4")?></li>
                            <li><?=__("label_5")?></li>
                            <li><?=__("label_6")?></li>
                            <li><?=__("label_7")?></li>
                            <li><?=__("label_8")?></li>
                            <li><?=__("label_9")?></li>
                        </ul>
                    </div>
                    <div>
                        <img src="./images/ASSET_PC_PIC_Partnerzy.png"/>
                    </div>
                </div>
                
                <div class="rodo-info">
                    <p><?=__("rodo")?></p>

                </div>
            </div>
    </div>
    <div class="information-box">
        <div class="information-content" data-slider>
            <div data-slides>
            <div class=information-block data-active>
                <div class="info-img"><img src="images/ASSET_ICO_Doswiadczenie.svg"/></div>
                <div class="info-title"><a><?=__("info_title1")?></a></div>
                <div class="vertical-line"></div>
                <div class="info-text"><a><?=__("info_text1")?></a></div>
            </div>
            <div class=information-block >
                <div class="info-img"><img src="images/ASSET_ICO_Siec.svg"/></div>
                <div class="info-title"><a><?=__("info_title2")?></a></div>
                <div class="vertical-line"></div>
                <div class="info-text"><a><?=__("info_text2")?></a></div>
            </div>
            <div class=information-block >
                <div class="info-img"><img src="images/ASSET_ICO_Wsparcie.svg"/></div>
                <div class="info-title"><a><?=__("info_title3")?></a></div>
                <div class="vertical-line"></div>
                <div class="info-text"><a><?=__("info_text3")?></a></div>
            </div>
            <div class=information-block >
                <div class="info-img"><img src="images/ASSET_ICO_Elastycznosc.svg"/></div>
                <div class="info-title"><a><?=__("info_title4")?></a></div>
                <div class="vertical-line"></div>
                <div class="info-text"><a><?=__("info_text4")?></a></div>
            </div>
            </div>
            <button class="slider-btn prev-btn" data-slider-btn="prev"><b><</b></button>
            <button class="slider-btn next-btn" data-slider-btn="next"><b>></b></button>
        </div>
    </div>
    <div class="site">
        <div class="content-wrapper">
            <a><b><?=__("offer_title")?></b></a>
            <div class="offer-box">
                <div class="offer-img">
                    <img src="./images/ASSET_PC_PIC_PracownikTymcz.png"/>
                </div>
                <div class="offer-text">
                    <a><?=__("offer_text")?></a>
                    <div class="offer-list">
                        <ul>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_01.svg)"><?=__("offer_1")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_02.svg)"><?=__("offer_2")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_03.svg)"><?=__("offer_3")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_04.svg)"><?=__("offer_4")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_05.svg)"><?=__("offer_5")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_06.svg)"><?=__("offer_6")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_07.svg)"><?=__("offer_7")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_08.svg)"><?=__("offer_8")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_09.svg)"><?=__("offer_9")?></li>
                            <li class="offer-li" style="background-image:url(images/ASSET_ICO_10.svg)"><?=__("offer_10")?></li>
                        </ul>
                    </div>
                </div>
            </div>  
                <div class="intro-space">
                    <div class="intro-form" id="page-section1">
                        <div class="intro-box">
                            <div class="intro-text">
                                <div class="intro-title">
                                    <b><?=__("intro_title")?></b>
                                </div>
                                <div class="intro-description">
                                    <?=__("intro_text1")?>
                                </div>
                                <div class="intro-description">
                                    <?=__("intro_text2")?>
                                </div>
                                <div class="intro-description">
                                    <?=__("intro_text3")?>
                                </div>
                            </div>
                            <div class="intro-img">
                                <img src="images/ASSET_PC_PIC_OTTO.png"/>
                            </div>
                        </div>
                        <div class="intro-buttonbox">
                            <button class="button1" onclick="window.location.href='#form';"><?=__("intro-button")?></button>
                        </div>
                    </div>
                </div>
        </div> 
    </div>
    <div class="intro"></div>
    <footer>
        <div class="fotter">
            <div class="leftfotter">
                <a href="https://wspolpraca.ottolandingpages.pl/" target="blank">
                    <img src="./images/ASSET_LOGO_OTTO.svg"/>
                </a>
            </div>
        </div>
    </footer>
</body>
<?php
	if (isset($_GET['success'])) {
		echo "<script>successFunction('1');</script>";
		}
	?>
</html>