<?php 
    $arrayTipos = Array('Compliance', 'Seguranca', 'Politica', 'Clientes', 'Termos');
    if(in_array($modulo, $arrayTipos)){
?>
<div id="flipbook-viewport" class="flipbook-viewport">
    <div class="container">
        <div class="flipbook">
            <?php 
                $dirname = "static/img/paginas/".strtolower($modulo)."/";
                $images = glob($dirname."*.jpg");
                foreach($images as $image) {
            ?>
                    <!--<div style="background-image:url(<?php //echo $image ?>)"></div>-->
                    <img src="<?php echo $image ?>" alt="">
            <?php } ?>
        </div>
    </div>
</div>
<div class="documento">
    <div class="download">
        <a href="documentos/<?php echo $modulo ?>.pdf" target="_blank">
            <i class="fa fa-floppy-o"></i><span>Salvar documento</span>
        </a>
    </div>
</div>
<?php } ?>