<div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>EIBO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="profile_photos/default_profile.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $ap_detail['name'];?></h2>
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
                  <li><a><i class="fa fa-network"></i>Your AP Team<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ap_team_list.php">All AP Team List</a></li>
                      <li><a href="level1ap.php">LEVEL 1 AP</a></li>
                      <li><a href="level2ap.php">LEVEL 2 AP</a></li>
                    </ul>
                  </li>
                  <li><a href="dra_team_list.php"><i class="fa fa-home"></i>your DRA Team <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                  <li><a><i class="fa fa-edit"></i>Referal Report<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="your_direct_costumer.php">Your Direct Costumer list</a></li>
                      <li><a href="your_total_costumer.php">All Costumer List</a></li>
                      <li><a href="n_deactive_costumer.php">Deactive / Never Active Costumer</a></li>
                    </ul>
                  </li>
                   <li><a href="their_costumer_billing_detail.php"><i class="fa fa-home"></i> Costumer Billing History <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="vc_create.php"><i class="fa fa-home"></i> Voucher Code <span class="fa fa-chevron-down"></span></a>
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
                <li><a href="my_commission.php"><i class="fa fa-money"></i> Commission Detail </a>
                  </li>
                  <li><a href="hold_wallet_ledger.php"><i class="fa fa-money"></i> Hold Wallet Ledger </a>
                  </li>
                <li><a><i class="fa fa-money"></i>Withdrawal Wallet<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="withdrawl_wallet.php">Withdraw Amount</a></li>
                      <li><a href="withdrawal_request.php">Withdrawal Requests</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i>AP Registration<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ap_registration.php">Register New AP</a></li>
                      <li><a href="register_ap_status.php">AP Status</a></li>
                      
                      </ul>
                  </li>
                  <li><a href="support_ticket.php"><i class="fa fa-edit"></i> Support </a>
                  </li>
                  </ul>
              </div>

            </div>