 <!-- <div id="footer">
            <?php //echo $this->Html->link(
                   // $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                   // 'http://www.cakephp.org/',
                   // array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
               // );
            ?>
            <p>
                <?php //echo $cakeVersion; ?>
            </p>
        </div> -->
    <!-- </div> -->
    <?php //echo $this->element('sql_dump'); ?>
    </div><!-- End #wrapper -->
    <?php

      echo $this->Html->script(
          array(
                   'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
                   'bootstrap/bootstrap',
                   'jquery.cookie',
                   'jquery.mousewheel',
                   '/plugins/charts/sparkline/jquery.sparkline.min.js',
                   '/plugins/misc/qtip/jquery.qtip.min',
                   '/plugins/misc/totop/jquery.ui.totop.min',
                   '/plugins/charts/flot/jquery.flot',
                   '/plugins/misc/search/tipuesearch_set',
                   '/plugins/misc/search/tipuesearch_data',
                   '/plugins/misc/search/tipuesearch',
                   '/plugins/forms/watermark/jquery.watermark.min',
                   '/plugins/forms/elastic/jquery.elastic',
                    '/plugins/forms/inputlimiter/jquery.inputlimiter.1.3.min',
                    '/plugins/forms/maskedinput/jquery.maskedinput-1.3.min',
                    '/plugins/forms/togglebutton/jquery.toggle.buttons',
                    '/plugins/forms/uniform/jquery.uniform.min',
                    '/plugins/forms/globalize/globalize',
                    '/plugins/forms/color-picker/colorpicker',
                    '/plugins/forms/timeentry/jquery.timeentry.min',
                    '/plugins/forms/select/select2.min',
                    '/plugins/forms/dualselect/jquery.dualListBox-1.3.min',
                    '/plugins/forms/tiny_mce/jquery.tinymce',
                    '/plugins/forms/smartWizzard/jquery.smartWizard-2.0.min',
                    '/plugins/fix/ios-fix/ios-orientationchange-fix',
                    'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js',
                    '/supr-theme/jquery-ui-timepicker-addon',
                    '/supr-theme/jquery-ui-sliderAccess',
                    '/plugins/fix/touch-punch/jquery.ui.touch-punch.min',                  
                    'main',
                    'forms',
                    'datatable'
                   // 'form-validation',
                    //'dashboard'
                    //'/TinyMCE/js/tiny_mce/tiny_mce.js', array('inline' => false),
                )
         ); 
    ?>
 </body>
</html>


