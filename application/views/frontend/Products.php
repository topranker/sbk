</div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
		
		<div class="compare_product" id="compare">
		<form role="form" class="form-horizontal form-label-left " method="post" action="<?=base_url();?>Landingpage/compare">
		<div class="col-md-3 col-sm-3 item form-group ">
			<label class="control-label col-md-6 col-sm-6 col-xs-6 textval" style="float-left"  for="name">Product 1<span class="required"></span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-6 textval" id="productName1">
				
			</div>
		</div>
<div class="col-md-3 col-sm-3 item " >
			<label class="control-label col-md-6 col-sm-6 col-xs-6 textval"  for="name">Product 2<span class="required"></span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-6 textval" id="productName2">
				
			</div>
		</div>
<div class="col-md-3 col-sm-3 item form-group ">
			<label class="control-label col-md-6 col-sm-6 col-xs-6 textval" for="name">Product 3<span class="required"></span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-6 textval" id="productName3">
				
			</div>
		</div>
<div class="col-md-3 col-sm-3 item form-group ">
			<label class="control-label col-md-6 col-sm-6 col-xs-6 textval" for="name">Product 4<span class="required"></span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-6 textval" id="productName4">
				
			</div>
		</div>
		
		<button  id="submit" type="submit" style="background-color:white; color:black; border-color:white; margin-top:70px" class="btn btn-success">Compare</button>
		</form>
		</div>
		<div class="back-links">
    		<p><a href="<?=base_url();?>">Home</a> >> <?=isset($categorykey)?$categorykey:''?> </p>
    	    </div>
    		<div class="heading">
    		<h3> Price List</h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  <div class="filter_panel">
		  <h3>Refine Your Search</h3>
		  <hr>
		  <?php if(!empty($filters)){  foreach($filters as $filter){ ?>
		  <div class="Price">
		  <h3> <?=isset($filter->groupName)?$filter->groupName:''?></h3>

		  </div>
		  <?php if($filter->filterGroupID){
				$filteratt=$this->Landingpage_model->get_grpatt($filter->filterGroupID);
				if($filteratt){ ?>
		   <div class="checkbox chk">
		   <?php foreach($filteratt as $filteratts){ ?>
					<label>
						<input type="checkbox" name="<?=isset($filteratts->name)?$filteratts->name:''?>" value="<?=isset($filteratts->value)?$filteratts->value:''?>"> <?=isset($filteratts->lable)?$filteratts->lable:''?>
					</label>
		   <?php } ?>
					</div>
		  <?php }}else{ ?>
		  <p>No Attribute Define For This Filter</p>
		  <?php } ?>
			<hr> 
		  <?php } }else{ ?>
		  <p>No Filter Found For This Category</p>
		  <?php } ?>
</div>
		  <div class="product_panel">
		   <?php if(!empty($products)){ foreach($products as $product){?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?=base_url();?>Landingpage/Product/<?=$product->categoriesUrlKey?>/<?=$product->productsUrlKey?>.html"><img src="<?=$product->imageName?>" alt="" /></a>
					 <h2><?=$product->productName?> </h2>
					
					 <p><span class="price"><?=$product->productPrice?></span></p>
					 <div class="button" ><span><img src="<?=base_url();?>frontend/images/cart.jpg" alt="" /> <?php if(!empty($userinfos)){ if(in_array($product->productsID,$whislistproduct)==false){?>
					  <a href="<?=base_url();?>User/AddToWishList/<?=$product->productsID?>.html" class="cart-button">Add to wishlists</a>
					  <?php } }else{ ?>
					  <a href="<?=base_url();?>Login.html?return=true" class="cart-button">Add to wishlists</a>
					  <?php } ?></span> </div><div class="button"><span><a href="<?=base_url();?>Landingpage/Product/<?=$product->categoriesUrlKey?>/<?=$product->productsUrlKey?>" class="details">Details</a></span></div>
					 <div class="checkbox">
					<label>
						<input type="checkbox" value="<?=$product->productsID?>" class="chkcount" name="productid" onchange="compare_product(this.value)"> Add to Compare
					</label>
					</div>
				</div>
				
				<!-- div class="button">
				<a href="<?=base_url();?>Login/compare" style="background-color:black; color:white;border-color:black" class="btn btn-success">Compare</a>
				</div> -->
				
		  <?php } }else{ echo"No product Found!!";}?>
			</div>
			</div>
			
			
    </div>
 </div>
</div>