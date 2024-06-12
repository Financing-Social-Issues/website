<section class="section partners">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-header section-header--animated section-header--tire section-header--medium-margin">
                    <h4><?php echo translate('Nosso Foco'); ?></h4>
                    <h2><?php echo translate('Entidades Beneficiadas'); ?></h2>
                </div>
                <div class="logoes">
                    <?php
                    $numLogos = 8;
                    $formats = ['webp', 'png', 'jpg', 'jpeg'];

                    function getImagePath($baseDir, $baseName, $formats) {
                        foreach ($formats as $format) {
                            $path = $baseDir . $baseName . '.' . $format;
                            if (file_exists($path)) {
                                return $path;
                            }
                        }
                        return null;
                    }
                    for ($i = 1; $i <= $numLogos; $i++):
                        $imagePath = getImagePath('assets/img/partners/', 'logo-' . $i, $formats);
                        if ($imagePath): ?>
                            <div>
                                <img src="<?php echo $imagePath; ?>" alt="Logo <?php echo $i; ?>" style="width: 230px">
                            </div>
                        <?php endif; endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>