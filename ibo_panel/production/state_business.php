<?php include "config.php";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>State Activity || EIBO </title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	 <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" onLoad="<?php echo $script;?>">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- sidebar menu -->
            <?php include "include/sidebar.php";?>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>State Activity</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>State Activity <small>are shown here</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                   <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     Your contact list is displayed here. You can keep their progress data here so it get easier to manage to you, so that you can focus on your business.
                    </p>
                   <table id="datatable" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>Sr. No.</th>
                   			<th>State</th>
                   			<th>Total Activity</th>
                   			<th>Team</th>
                   			<th>Percentage</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                   	 
					  <tr>
					    <td>1</td><th>Andra Pradesh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Andra Pradesh');?></td><td><?php echo team_counter_state(0,'Andra Pradesh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>2</td><th>Arunachal Pradesh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Arunachal Pradesh');?></td><td><?php echo team_counter_state(0,'Arunachal Pradesh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>3</td><th>Andaman and Nicobar Islands</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Andaman and Nicobar Islands');?></td><td><?php echo team_counter_state(0,'Andaman and Nicobar Islands');?></td><td></td>
					  </tr>
					  <tr>
					    <td>4</td><th>Assam</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Assam');?></td><td><?php echo team_counter_state(0,'Assam');?></td><td></td>
					  <tr>
					    <td>5</td><th>Bihar</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Bihar');?></td><td><?php echo team_counter_state(0,'Bihar');?></td><td></td>
					  <tr>
					    <td>6</td><th>Chhattisgarh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Chhattisgarh');?></td><td><?php echo team_counter_state(0,'Chhattisgarh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>7</td><th>Chandigarh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Chandigarh');?></td><td><?php echo team_counter_state(0,'Chandigarh');?></td><td></td>
					  <tr>
					    <td>8</td><th>Dadar and Nagar Haveli</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Dadar and Nagar Haveli');?></td><td><?php echo team_counter_state(0,'Dadar and Nagar Haveli');?></td><td></td>
					  </tr>
					  <tr>
					    <td>9</td><th>Daman and Diu</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Daman and Diu');?></td><td><?php echo team_counter_state(0,'Daman and Diu');?></td><td></td>
					  </tr>
					  <tr>
					    <td>10</td><th>Delhi</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Delhi');?></td><td><?php echo team_counter_state(0,'Delhi');?></td><td></td>
					  <tr>
					    <td>11</td><th>Goa</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Goa');?></td><td><?php echo team_counter_state(0,'Goa');?></td><td></td>
					  <tr>
					    <td>12</td><th>Gujarat</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Gujarat');?></td><td><?php echo team_counter_state(0,'Gujarat');?></td><td></td>
					  <tr>
					    <td>13</td><th>Haryana</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Haryana');?></td><td><?php echo team_counter_state(0,'Haryana');?></td><td></td>
					  <tr>
					    <td>14</td><th>Himachal Pradesh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Himachal Pradesh');?></td><td><?php echo team_counter_state(0,'Himachal Pradesh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>15</td><th>Jammu and Kashmir</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Jammu and Kashmir');?></td><td><?php echo team_counter_state(0,'Jammu and Kashmir');?></td><td></td>
					  </tr>
					  <tr>
					    <td>16</td><th>Jharkhand</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Jharkhand');?></td><td><?php echo team_counter_state(0,'Jharkhand');?></td><td></td>
					  <tr>
					    <td>17</td><th>Karnataka</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Karnataka');?></td><td><?php echo team_counter_state(0,'Karnataka');?></td><td></td>
					  </tr>
					  <tr>
					    <td>18</td><th>Kerala</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Kerala');?></td><td><?php echo team_counter_state(0,'Kerala');?></td><td></td>
					  </tr>
					  <tr>
					    <td>19</td><th>Lakshadeep</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Lakshadeep');?></td><td><?php echo team_counter_state(0,'Lakshadeep');?></td><td></td>
					  </tr>
					  <tr>
					    <td>20</td><th>Madya Pradesh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Madya Pradesh');?></td><td><?php echo team_counter_state(0,'Madya Pradesh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>21</td><th>Maharashtra</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Maharashtra');?></td><td><?php echo team_counter_state(0,'Maharashtra');?></td><td></td>
					  </tr>
					  <tr>
					    <td>22</td><th>Manipur</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Manipur');?></td><td><?php echo team_counter_state(0,'Manipur');?></td><td></td>
					  </tr>
					  <tr>
					    <td>23</td><th>Meghalaya</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Meghalaya');?></td><td><?php echo team_counter_state(0,'Meghalaya');?></td><td></td>
					  </tr>
					  <tr>
					    <td>24</td><th>Mizoram</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Mizoram');?></td><td><?php echo team_counter_state(0,'Mizoram');?></td><td></td>
					  </tr>
					  <tr>
					    <td>25</td><th>Nagaland</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Nagaland');?></td><td><?php echo team_counter_state(0,'Nagaland');?></td><td></td>
					  </tr>
					  <tr>
					    <td>26</td><th>Orissa</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Orissa');?></td><td><?php echo team_counter_state(0,'Orissa');?></td><td></td>
					  </tr>
					  <tr>
					    <td>27</td><th>Punjab</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Punjab');?></td><td><?php echo team_counter_state(0,'Punjab');?></td><td></td>
					  </tr>
					  <tr>
					    <td>28</td><th>Pondicherry</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Pondicherry');?></td><td><?php echo team_counter_state(0,'Pondicherry');?></td><td></td>
					  </tr>
					  <tr>
					    <td>29</td><th>Rajasthan</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Rajasthan');?></td><td><?php echo team_counter_state(0,'Rajasthan');?></td><td></td>
					  </tr>
					  <tr>
					    <td>30</td><th>Sikkim</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Sikkim');?></td><td><?php echo team_counter_state(0,'Sikkim');?></td><td></td>
					  </tr>
					  <tr>
					    <td>31</td><th>Tamil Nadu</th><<td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Tamil Nadu');?></td><td><?php echo team_counter_state(0,'Tamil Nadu');?></td><td></td>
					  </tr>
					  <tr>
					    <td>32</td><th>Telagana</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Telagana');?></td><td><?php echo team_counter_state(0,'Telagana');?></td><td></td>
					  </tr>
					  <tr>
					    <td>33</td><th>Tripura</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Tripura');?></td><td><?php echo team_counter_state(0,'Tripura');?></td><td></td>
					  </tr>
					  <tr>
					    <td>34</td><th>Uttaranchal</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Uttaranchal');?></td><td><?php echo team_counter_state(0,'Uttaranchal');?></td><td></td>
					  </tr>
					  <tr>
					    <td>35</td><th>Uttar Pradesh</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'Uttar Pradesh');?></td><td><?php echo team_counter_state(0,'Uttar Pradesh');?></td><td></td>
					  </tr>
					  <tr>
					    <td>36</td><th>West Bengal</th><td><?php echo find_downline_activity_state($_SESSION['e_id'],1,1,'West Bengal');?></td><td><?php echo team_counter_state(0,'West Bengal');?></td><td></td>
					  </tr>
					  
                   	</tbody>
                   	
                   </table>
                   
					  </div>
                   
                   
                   
                   
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      
       
       
       
        <!-- footer content -->
       <?php include "include/footer.php";?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
