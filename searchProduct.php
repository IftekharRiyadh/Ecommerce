<?php
// including features
include "header.php";
$ip_add = getenv("REMOTE_ADDR");
 //connecting database
include "db.php";
$keyword = $_SESSION["pname"];
echo "<div class='col-md-12 col-xs-12' style= 'text-align: center;'><h3>Showing Result for keyword: $keyword </h3></div>";
?>

<!-- STORE -->
<div id="store" class="col-md-12">
						
	<!-- store products -->
        <div class="row" id="product-row">
		    <div class="col-md-12 col-xs-12" id="product_msg">
    <?php 
		$keyword = $_SESSION["pname"];
        //header('Location:searchProduct.php');
		$sql = "SELECT * FROM products, categories WHERE product_cat=cat_id AND product_keywords LIKE '%$keyword%'";
  //data fetching
	$run_query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($run_query)) {
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
      		$cat_name = $row["cat_title"];
			
			echo "
			         <div class='col-md-3 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img  src='product_images/$pro_image'  style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'></del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist' tabindex='0'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view' ><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
			";
		}?>
			
			  </div>

        </div>
        
</div>

<?php
include "newslettter.php";
include "footer.php";
?>
