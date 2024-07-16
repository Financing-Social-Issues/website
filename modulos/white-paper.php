<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700");

    h1 {
        font-size: 32px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 24px;
    }

    .item {
        border: 2px solid #222222;
        margin-bottom: 10px;
        padding: 16px;
        border-radius: 8px;
        display: flex;
        gap: 16px;
        align-items: center;
        will-change: transform;
        background-color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    .item:hover {
        border-color: #7e3af2;
        transform: scale(1.025);
    }

    .item svg {
        width: 36px;
        height: 36px;
        transition: all 0.3s ease-in-out;
    }

    .item:hover svg {
        color: #7e3af2;
        fill: red;
    }

    .button{
        all: unset;
        margin-left: auto;
        background-color: #7e3af2;
        padding: 12px 16px;
        border-radius: 6px;
        color: #ffffff;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .item .filedata {
        display: flex;
        gap: 4px;
        font-size: 12px;
        margin-top: 8px;
        color: #888888;
    }

</style>
<section class="first-screen section section--no-pad-top" style="background-image: url(assets/img/ourfiles_bg.png);" id="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 data-aos="fade-up" data-aos-anchor="#main" data-aos-delay="200">
                    <?php echo translate('Transforme o Mundo com SOIS'); ?>
                </h1>
                <p data-aos="fade-up" data-aos-anchor="#main" data-aos-delay="300">
                    <?php echo translate('SOIS é a primeira criptomoeda dedicada a financiar causas sociais, superando as limitações das instituições financeiras tradicionais. Com SOIS, você apoia diretamente iniciativas que promovem o bem-estar social, garantindo que sua contribuição faça a diferença onde mais é necessário.'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <?php
    $directory = 'assets/wp/';
    $formats = ['pdf'];

    function getFiles($directory, $formats) {
        $files = [];
        foreach (scandir($directory) as $file) {
            foreach ($formats as $format) {
                if (pathinfo($file, PATHINFO_EXTENSION) === $format) {
                    $files[] = $file;
                }
            }
        }
        return $files;
    }

    $files = getFiles($directory, $formats);
    foreach ($files as $file):
        $filePath = $directory . $file;
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        ?>
        <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
            </svg>
            <div class="filename">
                <p><?php echo htmlspecialchars($fileName); ?></p>
                <div class="filedata">
                    <span>●</span>
                    <span><?php echo round(filesize($filePath) / 1048576, 2); ?> MB</span>
                </div>
            </div>
            <a href="<?php echo $filePath; ?>" class="button">Download</a>
        </div>
    <?php endforeach; ?>
</div>