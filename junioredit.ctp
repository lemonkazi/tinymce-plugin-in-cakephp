


<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>Junior Editor</h3>                    

            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

            <div class="search">

                <form id="searchform" action="search.html">
                    <input type="text" id="tipue_search_input" class="top-search text" placeholder="Search here ...">
                    <input type="submit" id="tipue_search_button" class="search-btn nostyle" value="">
                </form>
                
            </div><!-- End search -->

            <ul class="breadcrumb">
                <li>You are here:</li>
                <li>
                    <a href="#" class="tip" oldtitle="back to dashboard" title="" data-hasqtip="true">
                        <span class="icon16 icomoon-icon-screen-2"></span>
                    </a> 
                    <span class="divider">
                        <span class="icon16 icomoon-icon-arrow-right-2"></span>
                    </span>
                </li>
                <li class="active">Fill up </li>
            </ul>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box">

                    <div class="title">

                        <h4>
                            <span>Junior Editor</span>
                        </h4>
                            
                        <?php echo $this->Session->flash(); ?>
                            
                    </div>
                    <div class="content">
                           <?php echo $this->Form->create('Newses', array(
                            'inputDefaults' => array(
                                'label' => false,
                                'div'   => false                                  
                                ),
                            'id'=> 'form-validate',
                            'class' => 'form-horizontal',
                            'novalidate'=>'novalidate'
                            )
                            ); ?>

                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="required">News Title</label>

                                        <?php echo $this->Form->input(
                                            'title',
                                            array(
                                                'id'=>'required',
                                                'class' => 'span9 text'
                                                )

                                            ); 
                                            ?>
                                    </div>
                                </div>
                            </div>
                           <!--  -->
    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span3" for="normal">News Details</label>
                <!-- <div class="form-row"> -->
                    <!-- <textarea class="tinymce" name="sometext" style="width:90%;"></textarea> -->
                                <!-- </div> -->
 
                    <?php //echo $this->Form->create('Post');?>
                       
                        <?php
                       // echo $this->Tinymce->input('Newses.details');
                                //echo $this->Form->input('title');
                                echo $this->Tinymce->input('Newses.details', array(
                                    //'id'=>'required',
                                    'class' => 'span9'
                                        
                                        ),array(
                                                'language'=>'en'
                                        ),
                                        'full'
                            );
                        ?>
                     


                       
            </div>
        </div> 
    </div>
<?php

                            // $this->Tinymce->input('Newses.details', $options = array(), $tinyoptions = array(), $preset = null);
?>
                            
                         
                            
                           <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="normal">News Category</label>
                                    <?php echo $this->Form->input('cat_id',
                                                  array(
                                                   'type'=>'select',
                                                   'options'=>$categories,
                                                   'class' => 'span9 uniform',
                                                   'div' => array('class'=>'span9')
                                                   )
                                                  );
                                        ?>
                                </div>
                            </div>
                        </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="textarea">Picture</label>
                                        <input type="file" name="fileinput" id="file" />
                                    </div>
                                </div>  
                            </div>
                                 <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="normal">Image Url</label>
                                    <?php echo $this->Form->input(
                                        'image_url',
                                        array(
                                            'id'=>'required',
                                            'class' => 'span9 text'
                                            )

                                        ); 
                                        ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="normal">Youtube Url</label>
                                    <?php echo $this->Form->input(
                                        'youtube_url',
                                        array(
                                            'id'=>'required',
                                            'class' => 'span9 text'
                                            )
                                        ); 
                                        ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <div class="form-actions">
                                        <div class="span3"></div>
                                        <div class="span9 controls">
                                        <?php 
                                        echo $this->Form->button(
                                         'Insert', 
                                         array('class' => 'btn marginR10', 'type' => 'submit')
                                         ); ?>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                                    <?php echo $this->Form->end(); ?>

                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->



                                    </div><!-- End .row-fluid -->  