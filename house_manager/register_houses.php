<?php
  require_once('process_register_house.php');
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jul 2015 06:04:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
        <!-- META SECTION -->
        <title>rhms - Register new house</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <?php require_once('../incs/sidebar.php'); ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                   
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                        <li><a href="#"><?php echo $_SESSION['name'];?></a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                   
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>  
                     <li><a href="#">Manage houses</a></li> 
                    <li class="active">Add new house</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                   <div class="row">
                        <div class="col-md-8">
                            
                           <!-- START SALES & EVENTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3><i class="fa fa-plus-circle"></i>&nbsp;Add new house</h3>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                       <li><a href="#" class="panel-pull-rght"><span class="fa fa-edit"></span>back</a></li>
                                                                             
                                    </ul>
                                </div>
                                <div class="panel-body">
                                <?php if(isset($sms)){ echo $sms;} ?>
                                <form action = "" method = "POST">
                                     <table class = "table table-bordered" style = "width:100%;background:#f3f3f3">
                                    <tr>
                                    <td width="350px">
                                   <div class="form-group">
                                    <label>House ID</label>
                                            <div class="col-md-12">
                                                <input type="text" name="house" class="form-control" placeholder=""/>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="350px">
                                   <div class="form-group">
                                    <label>Location</label>
                                             <div class="col-md-12">
                                                <input type="text" name="location"  class="form-control" placeholder=""/>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>   
                                    </table>
                  
                                  <div class = "row">
                                        
                                        <button class = "btn btn-primary" name="save" style = "float:right"><i class="fa fa-plus"></i>Add</button>
                                        <button class = "btn btn-danger" style = "float:right; margin-right:4px">Cancel</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SALES & EVENTS BLOCK -->
                            
                     </div>
              </div>
                   
                 <!-- FOOTER --> 
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-body" style = "background:linen">
                                    &copy; 2017 RHMS
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END FOOTER -->                     
                    
                    
                    <!-- START DASHBOARD CHART -->
                    <div class="block-full-width">
                        <div id="dashboard-chart" style="height: 250px; width: 100%; float: left;"></div>
                        <div class="chart-legend">
                            <div id="dashboard-legend"></div>
                        </div>                                                
                    </div>                    
                    <!-- END DASHBOARD CHART -->       
           
           
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                               
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="../js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="../js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="../js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="../js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="../js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="../js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="../js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->      
        <script type="text/javascript" src="../js/plugins.js"></script>        
        <script type="text/javascript" src="../js/actions.js"></script>
        <script type="text/javascript">
          $(function(){
            $('.flush').delay(5000).fadeOut();
          });
        </script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->     
    
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jul 2015 06:05:27 GMT -->
</html>