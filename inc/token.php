<section class="section data section--no-pad-top" id="token">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-header section-header--tire section-header--medium-margin">
                    <h4><?php echo translate('Nossos Dados'); ?></h4>
                    <h2><?php echo translate('Distribuição do Token'); ?></h2>
                </div>
            </div>
        </div>

        <style>
            #container {
                height: 500px;
            }

            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 320px;
                max-width: 700px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

        </style>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <ul class="data__list">
                    <li>
                        <b><?php echo translate('Nome:'); ?></b>
                        Financing Social Issues
                    </li>
                    <li>
                        <b><?php echo translate('Métodos de pagamento aceito'); ?></b>
                        <?php echo translate('Todos'); ?>
                    </li>
                </ul>
                <div class="data__info">
                    <div class="data__info-item">
                        <?php echo translate('Capitação Total'); ?>
                        <b style="color: #16bf86;">11.45M USD</b>
                    </div>
                    <div class="data__info-item">
                        <?php echo translate('Capitação esperada'); ?>
                        <b style="color: #5775cf;">4.59M USD</b>
                    </div>
                    <div class="data__info-item">
                        <?php echo translate('Valor de 1 Token SOIS'); ?>
                        <b style="color: #f2718b;">0.02 USD</b>
                    </div>
                </div>
                <ul class="data__list">
                    <li>
                        <b><?php echo translate('Novas emissões:'); ?></b>
                        <?php echo translate('Indisponível'); ?>
                    </li>
                    <li>
                        <b><?php echo translate('Sistema de Queima'); ?></b>
                        <?php echo translate('Sim'); ?>
                    </li>
                    <li>
                        <b><?php echo translate('Pré-venda de Venda Privada:'); ?></b>
                        <?php echo translate('Não'); ?>
                    </li>
                    <li>
                        <b><?php echo translate('Cadastro de participantes:'); ?></b>
                        <?php echo translate(''); ?>Not
                    </li>
                    <li>
                        <b><?php echo translate('Cadastro de participantes:'); ?></b>
                        0.02 USD / <?php echo translate('Sem limite'); ?>
                    </li>
                    <li>
                        <b><?php echo translate('Contrato:'); ?></b>
                        <?php echo $coin['contract'] ?>
                    </li>
                </ul>
<!--                <a href="" class="btn btn--blue btn--medium">--><?php //echo translate('Comprar Tokens'); ?><!--</a>-->
            </div>
            <div class="col-lg-6" data-aos="fade-down" data-aos-delay="400">
                <div class="row">
                    <div class="col">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/figure-pink.png" alt="" data-jarallax-element="-40" class="data__figure-1">
    </div>
</section>