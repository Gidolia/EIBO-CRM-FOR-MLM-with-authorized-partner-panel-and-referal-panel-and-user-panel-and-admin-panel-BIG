<div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../../small_bw_logo.png" height="45px" width="52px"> <span>EIBO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <a href="profile_update.php"><img src="<?php echo $profile_photo_src;?>" alt="...." class="img-circle profile_img"></a>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $ibo_name;?></h2>
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
                  
                  
                  <!-- for basic contact-->
                  <?php
                   if($ibo_detail[subscription_type] == "Basic")
                   {?>
                  
                  <li><a><i class="fa fa-edit"></i>Contact list <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="enter_contact_list.php">Enter Contact List</a></li>
                      <li><a href="contact_list.php">Contact List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Team Member<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Team Member</a>
                         <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                      <li><a href="#">Team Tree View</a>
                         <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                      <li><a href="#">Total Team List</a>
                         <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                    </ul>
                  </li>
                 
                  <?php } ?>
                  <!-- for basic contact-->
                  <?php
                   if($ibo_detail[subscription_type] == "Premium")
                   {?>
                  
<li><a><i class="fa fa-edit"></i>Contact list <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="enter_contact_list.php">Enter Contact List</a></li>
                      <li><a href="contact_list.php">Contact List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Team Member<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="team_management.php">Team Member</a></li>
                      <li><a href="genealogy.php">Team Tree View</a></li>
                      <li><a href="team_list.php">Total Team List</a></li>
                    </ul>
                  </li>
                 
                  <?php } 
                   if($ibo_detail[subscription_type] == "")
                   {?>
                   
                  <li><a><i class="fa fa-edit"></i>Contact list <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Enter Contact List</a>
                        <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                      <li><a href="#">Contact List</a>
                        <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Team Member<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Team Member</a>
                        <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul></li>
                      <li><a href="#">Team Tree View</a>
                        <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                      <li><a href="#">Total Team List</a>
                        <ul class="nav child_menu">
                             <li>You cannot use this feature upgrade your plan</li>
                         </ul>
                      </li>
                    </ul>
                  </li>
                  <?php } ?>
                    <li><a href="state_business.php"><i class="fa fa-home"></i> State Wise</a>
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
                      <li><a href="sponser_id_enter.php">Update Upline</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> Daily Work<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="my_working_sheet.php">Your Daily Activity</a></li>
                      <li><a href="team_working_sheet.php">Team Working sheet</a></li>
                    </ul>
                  </li>
                  <li><a href="daily_target.php"><i class="fa fa-home"></i> Daily Target <span class="fa fa-chevron-down"></span></a>
                  </li>
              
                  </li>
                  <li><a href="suscribe_plan.php"><i class="fa fa-home"></i> Suscribe Plan</a>
                  </li>
                  <li><a href="billing_history.php"><i class="fa fa-home"></i> Billing History </a>
                  </li>
                  <li><a href="suggestion_box.php"><i class="fa fa-home"></i> Suggestion Box </a>
                  </li>
                  <li><a href="support_ticket.php"><i class="fa fa-home"></i> Support </a>
                  </li>
                </ul>
              </div>

            </div>