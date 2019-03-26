<?php
    defined('_JEXEC') or die('Restricted access');
    
    /*Store name of the this template*/
    $tplpath = $this->baseurl . '/templates/' . $this->template;
    $this->setMetaData('viewport', 'width=device-width, initial-scale=1');

    /*Using WebAssetManager to get BS4 from core*/
    $wa   = $this->getWebAssetManager();
    $wa->enableAsset('bootstrap.css');
    $wa->enableAsset('bootstrap.css.grid');
    $wa->enableAsset('bootstrap.js');
    $wa->enableAsset('bootstrap.js.bundle');
    $wa->enableAsset('font-awesome');

?>

<!DOCTYPE html>
<html xml:lang="en" lang="en" >
    <head>
        <!-- include files using jdoc -->
        <jdoc:include type="metas" />
        <jdoc:include type="styles" />
        <jdoc:include type="scripts" />

        <!-- Include stylesheets specific to the template (if any)-->
        <link href="<?php echo $tplpath ?>/css/template.css" rel="stylesheet">

        <h4>Hi <?php echo $this->params->get( 'CustomElem' ); ?></h4>
    </head>

    <body>

        <!-- include Module Pos : Top -->
        <div class = "container">
            <jdoc:include type="modules" name="top" />
        </div>
        <!-- end -->

        <div class = "container">
            <div class = "row">

                <div class="col-sm-3">
                    <!-- include Module Pos : Left, if not empty -->
                    <?php if ($this->countModules( 'left' )) : ?>
                        <jdoc:include type="modules" name="left" style="none" />
                    <?php endif; ?>
                    <!-- end -->
                </div>

                <!-- include component, with style from params(just as an example) -->
                <div class="col-sm-6" style="
                    color: <?php echo $this->params->get( 'templateColour' ); ?>;
                    font-style: <?php echo $this->params->get( 'templateStyle' ); ?>
                    ">
                    <jdoc:include type="component" style="none"/>                   
                </div>
                <!-- end -->

                <div class="col-sm-3">
                    <!-- include Module Pos : Right, if not empty -->
                    <?php if ($this->countModules( 'right' )) : ?>
                        <jdoc:include type="modules" name="right" style="none" />
                    <?php endif; ?>
                    <!-- end -->
                </div>

            </div>
        </div>

        <!-- include Module Pos : bottom -->
        <div class = "container">
            <jdoc:include type="modules" name="bottom" />
        </div>
        <!-- end -->

    </body>
</html>