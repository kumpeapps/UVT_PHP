                        <?php
                        
                        $masterImageExists = file_exists("assets/images/users/".$masterID.".png");
                        
                        if ($masterImageExists == 1){
                        $masterImage = $masterID.".png";
                        }else{
                        $masterImage = "pug.png";}
                        
                        ?>
                        
                        
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/<?php echo $masterImage; ?>" alt="user" class=""> <span class="hidden-md-down"><?php echo $firstName; ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="https://www.kumpeapps.com/profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a> -->
                                <!-- text-->
                                <!-- <div class="dropdown-divider"></div>  -->
                                <!-- text-->
                                <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a> -->
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>