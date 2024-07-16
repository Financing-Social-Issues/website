<header class="header">
    <a href="/" class="logo"  aria-label="Visit SOIS">
        <div class="logo__img"></div>
        <div class="logo__title"><?php echo $name;?></div>
    </a>
    <ul class="menu">
        <li class="menu__item">
            <a href="#about" class="menu__link"><?php echo translate('Sobre'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#services" class="menu__link"><?php echo translate('Serviços'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#map" class="menu__link"><?php echo translate('Trajetória'); ?></a>
        </li>
<!--        <li class="menu__item">
            <a href="#stat" class="menu__link"><?php /*echo translate('Statisticas'); */?></a>
        </li>-->
        <li class="menu__item">
            <a href="#token" class="menu__link"><?php echo translate('Token'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#docs" class="menu__link"><?php echo translate('WhitePappers'); ?></a>
        </li>
<!--        <li class="menu__item">
            <a href="#team" class="menu__link"><?php /*echo translate('Equipe'); */?></a>
        </li>-->
        <li class="menu__item">
            <a href="#faq" class="menu__link"><?php echo translate('FAQ'); ?></a>
        </li>
        <button type="button" class="btn btn-custom"
                style="color: black; font-weight: 900; background-color: yellow;"
                onclick="window.location.href='https://www.pinksale.finance/launchpad/bsc/0xd34ebb5911b866759d2E1039DA954555021457b5'">
            JOIN PRESALE
        </button>

    </ul>
    <div class="header__right">


<!--        <a href="https://www.pinksale.finance" class="telegram-link" target="pinksale"  aria-label="Visit Pinksale">
            <img src="assets/img/pinksale.avif" alt="Pinksale Link">
        </a>
        <a href="https://www.dexview.com" class="telegram-link" target="telegram"  aria-label="Visit Dexview">
            <img src="assets/img/dexview-cat.svg" alt="Dexview Link" style="max-width: 39px">
        </a>-->
        <a href="<?php echo $social['telegram'] ?>" class="telegram-link" target="telegram"  aria-label="Visit Telegram">
            <img src="assets/img/telegram-link.png" alt="Telegram Link">
        </a>



        <div class="dropdown" tabindex="0">
            <button id="dropdown-btn" class="dropdown-btn"></button>
            <ul class="dropdown-content" id="dropdown-content"></ul>
        </div>
    </div>
    <div class="btn-menu">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>
</header>