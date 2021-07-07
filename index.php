<?php require('top.php')?>
<div class="body__overlay"></div>
        
      
     <table style="width:100%">
	  <tr>
    <th>name</th>
    <th>category</th> 
    <th>description</th>
  </tr>
							<?php
							$get_product=get_product($con);
							foreach($get_product as $list){
							?>
							  <tr>
    <td><?php echo $list['name']?></td>
    <td><?php echo $list['categories_id']?></td>
    <td><?php echo $list['description']?></td>
  </tr>
                            
                                       
                                       
                              
							<?php } ?>
				</table>			
                       
           
<?php require('footer.php')?>        