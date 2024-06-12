<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12" style="display: flex; justify-content: center; align-items: center;">
                <a href="" class="logo">
                    <img class="logo__img logo__img--big" src="assets/img/sois_logo_min.png" alt="">
                </a>
                <div class="copyright">
                    <?php echo $copyright ?></br>
                    <?php echo $social['email'] ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="footer-menu">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Sobre'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Serviços'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Trajetória'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Statisticas'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Token'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('WhitePappers'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('Equipe'); ?></a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link"><?php echo translate('FAQ'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="social-block">
                    <div class="social-block__title">
                        <?php echo translate('Junte-se a Nós'); ?>
                    </div>
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a href="<?php echo $social['twitter'] ?>" class="" target="twitter">
                                <i class="bi bi-twitter-x fs" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="<?php echo $social['facebook'] ?>" class="-list__link" target="facebook">
                                <i class="bi bi-facebook" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="<?php echo $social['telegram'] ?>" class="" target="telegram">
                                <i class="bi bi-telegram" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="<?php echo $social['linkedin'] ?>" class="" target="linkedin">
                                <i class="bi bi-linkedin" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="<?php echo $social['instagram'] ?>" class="" target="instagram">
                                <i class="bi bi-instagram" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="<?php echo $social['github'] ?>" class="" target="github">
                                <i class="bi bi-github" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

