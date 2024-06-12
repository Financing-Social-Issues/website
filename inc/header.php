<header class="header">
    <a href="/" class="logo">
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
        <li class="menu__item">
            <a href="#stat" class="menu__link"><?php echo translate('Statisticas'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#token" class="menu__link"><?php echo translate('Token'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#docs" class="menu__link"><?php echo translate('WhitePappers'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#team" class="menu__link"><?php echo translate('Equipe'); ?></a>
        </li>
        <li class="menu__item">
            <a href="#faq" class="menu__link"><?php echo translate('FAQ'); ?></a>
        </li>
    </ul>
    <div class="header__right">
        <a href="<?php echo $social['telegram'] ?>" class="telegram-link" target="telegram">
            <img src="assets/img/telegram-link.png" alt="">
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