<?php 
require('top.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_product=get_product($con,'',$cat_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>

        
       
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  
                                </nav>
                            </div>
            
        
            <div class="container">
                <div class="row">
					<?php if(count($get_product)>0){?>
                    
                                    <div >
                                        <?php
										foreach($get_product as $list){
										?>
										
												
												<div class="fr__product__inner">
													<h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
													<h4><a href="product-details.html"><?php echo $list['description']?></a></h4>
													<h4><a href="product-details.html"><?php echo $list['categories_id']?></a></h4>
													
												</div>
											
										<?php } ?>
                            
                    </div>
					<?php } else { 
						echo "Data not found";
					} ?>
                
				</div>
            </div>
       
        <!-- End Product Grid -->
        <!-- End Banner Area -->
<?php require('footer.php')?>        