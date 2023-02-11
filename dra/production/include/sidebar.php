<div class="navbar nav_title" style="border: 0;">

              <a href="index.php" class="site_title"><img src="../../small_bw_logo.png" height="45px" width="52px">  <span>EIBO</span></a>

            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->

            <div class="profile clearfix">

              <div class="profile_pic">

                <img src="profile_photos/<?php echo $_SESSION[dra_id];?>.jpg" alt="..." class="img-circle profile_img">

              </div>

              <div class="profile_info">

                <span>Welcome,</span>

                <h2><?php echo $dra_detail[name];?></h2>

              </div>

              <div class="clearfix"></div>

            </div>

            <!-- /menu profile quick info -->
            <br />

             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">

                <h3>General</h3>

                <ul class="nav side-menu">

                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>

                  </li>
                  <li><a><i class="fa fa-edit"></i>Costumer<span class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">

                      <li><a href="total_costumer_list.php">All Costumer List</a></li>

                      <li><a href="direct_sale_costumer.php">Direct Sale Costumer</a></li>

                      <li><a href="deactive_costumer_list.php">Deactive Costumer</a></li>

                    </ul>

                  </li>
                </ul>

              </div>

              <div class="menu_section">

                <h3>Live On</h3>

                <ul class="nav side-menu">

                  <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">

                     
                      <li><a href="password_change.php">Change Password</a></li>
                      <li><a href="kyc.php">KYC</a></li>

                    </ul>

					</li>

                <li><a href="my_commission.php"><i class="fa fa-money"></i> Commission Detail </a>

                  </li>
                  <li><a href="hold_wallet_ledger.php"><i class="fa fa-money"></i> Hold Wallet Ledger</a>

                  </li>
                <li><a><i class="fa fa-money"></i>Withdrawal Wallet<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="withdrawl_wallet.php">Withdraw Amount</a></li>
                      <li><a href="withdrawal_request.php">Withdrawal Requests</a></li>
                      </ul>
                  </li>
                  <li><a href="support_ticket.php"><i class="fa fa-edit"></i> Support </a>
                  </li>
                </ul>
              </div>



            </div>