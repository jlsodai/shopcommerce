<?php require('header.php'); ?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="clear"></div>

					<!-- Shop
					============================================= -->
					<div id="shop" class="clearfix">
						<?php for ($i=0; $i < 4; $i++) { ?>
							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
									<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
									<div class="sale-flash">50% Off*</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
									<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>
						<?php } ?>

					</div><!-- #shop end -->

				</div>

				<div class="clear"></div>

			</div>

		</section><!-- #content end -->

<?php require('footer.php'); ?>