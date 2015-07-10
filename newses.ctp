<div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>All Newses</h3>                    
                   

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                    <div class="search">

                        <form id="searchform" action="search.html">
                            <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                            <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                        </form>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-2"></span>
                            </span>
                        </li>
                        <li class="active">All Newses</li>
                    </ul>

                </div><!-- End .heading-->
                    
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row-fluid">

                        <div class="span12">

                            <div class="box gradient">

                                <div class="title">
                                    <h4>
                                        <span>All News list</span>
                                    </h4>
                                </div>
                                 <?php echo $this->Session->flash(); ?>
                                <div class="content noPad clearfix">
                                    <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Category Id</th>
                                                <th>Image Url</th>
                                                <th>Youtube Url</th>
                                                <th>User Id</th>  
                                                <th>Date</th>                                                                                              
                                                <th>Status</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($newses as $single):
                                                $newses = $single['Newses'];
                                                ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $newses['title']; ?></td>
                                                <td><?php echo $newses['details']; ?></td>
                                                <td><?php echo $newses['cat_id']; ?></td>
                                                <td><?php echo $newses['image_url']; ?></td>
                                                <td><?php echo $newses['youtube_url']; ?></td>
                                                <td><?php echo $newses['user_id']; ?></td>                                                
                                                <td><?php echo $newses['created']; ?></td> 
                                                <td><?php echo $newses['status']; ?></td> 
                                                <td>   
                                                    <div class="controls center">
                                                        <a aria-describedby="qtip-7" data-hasqtip="true" title="" oldtitle="Edit task" target="_blank" href="<?php echo Router::url(array('controller'=>'admins','action'=>'edit',$newses['id']))?>" class="tip"><span class="icon12 icomoon-icon-pencil"></span></a>

                                                         <a aria-describedby="qtip-8" data-hasqtip="true" title="" oldtitle="Remove task"
                                                         onclick="if (confirm(&quot;Are you sure to delete this Newses?&quot;)) { return true; } return false;"
                                                          href="<?php echo Router::url(array('controller'=>'admins','action'=>'delete',$newses['id'])
                                                         )?>" class="tip"><span class="icon12 icomoon-icon-remove"></span></a>                          
                                                        <?php if($newses['status']!='blocked'):?>

                                                          <a aria-describedby="qtip-7" data-hasqtip="true" title="" oldtitle="Edit task"
                                                           onclick="if (confirm(&quot;Are you sure to block this Newses?&quot;)) { return true; } return false;"

                                                           href="<?php echo Router::url(array('controller'=>'admins','action'=>'block',$newses['id'])
                                                         )?>" class="tip"><span class="icon12 iconic-icon-move-horizontal-alt2"></span></a>
                                                          <?php endif; ?>
                                                       
                                                        <?php if($newses['status']!='active'):?>
                                                        <a aria-describedby="qtip-8" data-hasqtip="true" title="" oldtitle="Remove task" 
                                                        onclick="if (confirm(&quot;Are you sure to active this Newses?&quot;)) { return true; } return false;"

                                                           href="<?php echo Router::url(array('controller'=>'admins','action'=>'active',$newses['id'])
                                                         )?>"
                                                         class="tip"><span class="icon12 icomoon-icon-checkmark"></span></a>
                                                    <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php
                                            endforeach;
                                            ?>
                                          
                                            
                                        </tbody>
                                       
                                    </table>
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->

                    </div><!-- End .row-fluid -->
               
                <!-- Page end here -->               
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->