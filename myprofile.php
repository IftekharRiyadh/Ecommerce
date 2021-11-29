<div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
    .input-borders{
        border-radius:30px;
    }
    </style>
    <?php
    include "db.php";
    $sql = "SELECT * from user_info WHERE user_id = '$_SESSION[uid]'" ;
	$query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
    
    ?>
				<!-- row -->
                <div class="container-fluid">
						<!-- /Billing Details -->
								<form id="signup_form" onsubmit="return false" class="login100-form">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                      <!-- register form -->
                                        <h2 class="login100-form-title p-b-49" >Profile</h2>
                                    </div>
                                    <div class="form-group ">
                                        <input class="input form-control input-borders" type="text" name="f_name" id="f_name" value="<?php echo $row['first_name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="l_name" id="l_name"  value="<?php echo $row['last_name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="email" name="email"   value="<?php echo $row['email'];?>">
                                    </div>
                                                        
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="mobile"  value="<?php echo $row['mobile'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address1" id="address1"  value="<?php echo $row['address1'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address2" id="address2"  value="<?php echo $row['address2'];?>">
                                    </div>
                                    <!-- <div style="form-group">
                                       <input class="primary-btn btn-block"  value="Save" type="submit" name="signup_button">
                                    </div> -->
                                    
								</form>
                                <div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>
				         	</div>
              </div>
				<!-- /row -->
