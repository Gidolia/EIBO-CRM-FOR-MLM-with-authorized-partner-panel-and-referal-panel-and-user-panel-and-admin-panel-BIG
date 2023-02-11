<div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../../small_bw_logo.png" height="45px" width="52px">  <span>EIBO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="profile_photos/default_profile.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $admin_detail['name'];?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                  </li>
                  <li><a><i class="fa fa-home"></i>AP Details<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="ap_team_list.php">AP Team</a></li>
                      <li><a href="ap_withdrawl_request.php">AP Pending Withdrawl Requests</a></li>
                      <li><a href="ap_withdrawl_clear_history.php">AP Cleared Withdrawl Requests</a></li>
                      <li><a href="ap_kyc.php">AP KYC</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i>DRA Details<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="dra_list.php">DRA Team</a></li>
                      <li><a href="dra_withdrawl_request.php">DRA Pending Withdrawl Requests</a></li>
                      <li><a href="dra_withdrawl_clear_history.php">DRA Cleared Withdrawl Requests</a></li>
                      <li><a href="dra_kyc.php">DRA KYC</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i>Referal Report<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="your_direct_costumer.php">Your Direct Costumer list</a></li>
                      <li><a href="your_total_costumer.php">All Costumer List</a></li>
                      <li><a href="n_deactive_costumer.php">Deactive / Never Active Costumer</a></li>
                    </ul>
                  </li>
                  <li><a href="pay_income.php"><i class="fa fa-home"></i> Clear Payment <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                   <li><a href="their_costumer_billing_detail.php"><i class="fa fa-home"></i> Costumer Billing History <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profile_update.php">Your Profile</a></li>
                      <li><a href="password_change.php">Change Password</a></li>
                    </ul>
                    </li>
                    <li><a><i class="fa fa-bug"></i> Support<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="support_query.php">Support IBO</a></li>
                      <li><a href="dra_support_query.php">Support DRA</a></li>
                      <li><a href="ap_support_query.php">Support AP</a></li>
                    <ul>
                    </li>
                </ul>
              </div>

            </div>