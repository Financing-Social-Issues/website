<?php require "inc/screen.php" ?>
<?php require "inc/about.php" ?>
<?php require "inc/services.php" ?>
<?php require "inc/infoblock.php" ?>
<?php require "inc/map.php" ?>
<?php require "inc/app.php" ?>
<?php require "inc/process.php" ?>

<section class="section data section--no-pad-top" id="token">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-header section-header--tire section-header--medium-margin">
                    <h4>Our data</h4>
                    <h2>Token Distribution</h2>
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
                        <b>Name:</b>
                        Financing Social Issues
                    </li>
                    <li>
                        <b>Purchase methods accepted:</b>
                        ALL
                    </li>
                </ul>

                <div class="data__info">
                    <div class="data__info-item">
                        Hard cap
                        <b style="color: #16bf86;">11.45M USD</b>
                    </div>
                    <div class="data__info-item">
                        Soft cap
                        <b style="color: #5775cf;">4.59M USD</b>
                    </div>
                    <div class="data__info-item">
                        Cost of 1 SOIS Token
                        <b style="color: #f2718b;">0.02 USD</b>
                    </div>
                </div>

                <ul class="data__list">
                    <li>
                        <b>New Token emissions: </b>
                        Unavailable
                    </li>
                    <li>
                        <b>Burn system:</b>
                        Yes
                    </li>
                    <li>
                        <b>Mint system:</b>
                        Yes
                    </li>
                    <li>
                        <b>Presale of Private Sale:</b>
                        Not held
                    </li>
                    <li>
                        <b>Know Your Customer (KYC):</b>
                        Not
                    </li>
                    <li>
                        <b>Min/Max Personal Cap:</b>
                        0.02 USD / No limit
                    </li>
                    <li>
                        <b>Contract:</b>
                        0x42bf6be831d69f8e7b04e2e57fe7d12040ec792d
                    </li>
                </ul>

                <a href="" class="btn btn--blue btn--medium">Buy Tokens</a>

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


<?php require "inc/docs.php" ?>
<?php require "inc/faq.php" ?>
<?php //require "inc/team.php" ?>
<?php //require "inc/advisors.php" ?>
<?php require "inc/partners.php" ?>
<?php //require "inc/contact.php" ?>