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
    $sql = "SELECT * from orders_info o, order_products p, products x WHERE o.user_id = '$_SESSION[uid]' AND o.order_id = p.order_id AND p.product_id = x.product_id" ;
	$query = mysqli_query($con,$sql);
   // $row = mysqli_fetch_array($query);
   $i = 1;
    
    ?>
				<!-- row -->
                <div class="container-fluid">
						<!-- /Billing Details -->
							
								<div class="billing-details jumbotron">
                                    <div class="section-title">
                                      <!-- register form -->
                                        <h2 class="login100-form-title p-b-49" >My Order</h2>
                                    </div>
                                    <div class="card" style="background-color: white;">
                                    <!-- <h5 class="card-title" style="text-align: center;"><?php echo "hello";?></h5> -->
                                    
                                        <div class="card-body">
                                            
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <?php while ($row = mysqli_fetch_assoc($query)) {
                                                    echo '<tbody>
                                                    <tr>
                                                    <th scope="row">'.$i++.'</th>
                                                    <td>'.$row['product_title'].'</td>
                                                    <td>'.$row['qty'].'</td>
                                                    <td>'.$row['total_amt'].'</td>
                                                    <td>Delivered</td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>';
                                                }?>
                                               
                                                </table>
                                        </div>
                                    </div>
                                   

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
