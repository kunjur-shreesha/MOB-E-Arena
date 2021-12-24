<?php 
include("Product.php");
$product = new Product();
$categories = $product->getCategories();
$brands = $product->getBrand();
$materials = $product->getMaterial();
$productSizes = $product->getProductSize();
$totalRecords = $product->getTotalProducts();
include('inc/phone_header.php');
?>
<style>
    #more {display: none;};
</style>
<title>Phone Finder : Find the Phone that suits your needs</title>   
<?php include('inc/container.php');?>
	<div class="container" style="min-height:500px;">
<div class="content"> 
	<div class="container-fluid">
		<div>
    <div class="container py-4 " >
      <div class="row align-items-md-stretch">
      <div class="col-lg-12">
        <div class="h-100 p-5 text-white bg-dark rounded-007 wrapper" style="  border-radius: 1rem !important">
          <div class="row">
              <h3 class=" pb-2" style="text-align:center;border-bottom:1px grey solid"><em>Phone Finder</em></h3>
             <p style="color:#d9d9d9">MOB-E Arena with its <b>Mobile Phone Finder</b> tool lets you explore the specifications and features of each and every phone available in India. Our advanced tool covers all the smartphones across all the manufacturers. The Phone Finder tool is designed in such a way that even a technically handicapped person would be<span id="dots">...&nbsp&nbsp </span><span id="more">able to pick the best device by himself and compare mobile phones in India.

<br><br>
<b>Phone Finder India</b>- The mobile finder tool makes your life easier. You can select mobile using following filters to fulfil your requirements:
<br>
<br>
<b>Price :</b> One of the most important factor of consumers is the mobile phone price. On the left side of the `Phone Finder` page, users have the option to put the price range or select the price range which appears right below the price filter.
<br>
<br>
<b>Brands :</b> For all the brand conscious people, our mobile finder tool covers all the premium and popular brands that you wish for. This search criteria pulls up the phones with the specifications selected in the above two categories.
<br>
<br>
<b>Processor :</b> The strength of every phone is largely dependent on the processor and through this filter you would be able to search for the phones with the processors that you have selected.
<br>
<br>
<b>Camera :</b> Most of the times, consumers are unaware of the quality of cameras that are available in their budget. To cover this gap, <b>mobile finder India tool</b> provides you the best camera phones available in your budget.
<br>
<br>
<b>Memory :</b> The storage capacity of the phone could be the deciding factor for users who like to store music filters and movies in plethora. This filter gives the option to select the Internal and external memory` of the phone available in the selected search categories.
<br>
<br>
Apart from the above mentioned filters, there are many refined filters available in our <b>phone finder app</b> to narrow down the list of the phones that you are looking for. The other search filters include design, processor, pixel density and many more.
<br>
<br>
<b>Pick your best phone through Mobile Finder Tool</b>
<br>
<br>
Once you have filled in all the requirements in the search criteria, you will get the list of all the phones with the selected specifications to compare mobile in India. If a phone meets your eye, all you need to do is click on the link which will take you to the detail page of the selected phone.
<br>
<br>
To sum up, this page makes you self dependant, efficient and knowledgeable. You no longer have to approach your friends or acquaintances to buy a phone. This is your own Android phone finder page that makes you the expert and even compares mobile phones and specifications. <br> </span>
<a onclick="myFunction()" href="#" id="myBtn" style="text-decoration:underline;color:grey;">+Read more</a></p>
            
            </div>
        </div>
      </div></div></div>
</div><br><br><br>			
            <form method="post" id="search_form">               
                <div class="row">                    
                    <aside class="col-lg-3 col-md-4">						
						<div class="panel list">
                            <h3 style="padding-left:25px"><i class="bi bi-search"></i>&nbsp<em style="text-decoration:underline">Refine Results</em></h3>
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true"><b>OS</b></h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php 
								foreach ($categories as $key => $category) {
                                    if(isset($_POST['category'])) {
                                        if(in_array($product->cleanString($category['category_id']),$_POST['category'])) {
                                            $categoryCheck ='checked="checked"';
                                        } else {
											$categoryCheck="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($category['category_id']); ?>" <?php echo @$categoryCheck; ?> name="category[]" class="sort_rang category"><?php echo ucfirst($category['category_name']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true"><b>Brands</b></h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php 
								foreach ($brands as $key => $brand) {
                                    if(isset($_POST['brand'])) {
                                        if(in_array($product->cleanString($brand['brand']),$_POST['brand'])) {
                                            $brandChecked ='checked="checked"';
                                        } else {
											$brandChecked="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($brand['brand']); ?>" <?php echo @$brandChecked; ?> name="brand[]" class="sort_rang brand"><?php echo ucfirst($brand['brand']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
						<div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true"><b>Sort By</b></h3></div>
                            <div class="panel-body collapse in" id="panelOne">
								<div class="radio disabled">
									<label><input type="radio" name="sorting" value="newest" <?php if(isset($_POST['sorting']) && ($_POST['sorting'] == 'newest' || $_POST['sorting'] == '')) {echo "checked";} ?> class="sort_rang sorting">Newest</label>
								</div> 
								<div class="radio">
									<label><input type="radio" name="sorting" value="low" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'low') {echo "checked";} ?> class="sort_rang sorting">Price: Low to High</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="sorting" value="high" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'high') {echo "checked";} ?> class="sort_rang sorting">Price: High to Low</label>
								</div>								                              
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelTwo" aria-expanded="true"><b>Camera</b></h3></div>
                            <div class="panel-body collapse in" id="panelTwo">
                                <ul class="list-group">
                                <?php 
								foreach ($materials as $key => $material) {
                                    if(isset($_POST['material'])) {
                                        if(in_array($product->cleanString($material['material']),$_POST['material'])) {
                                            $materialCheck='checked="checked"';
										} else { 
											$materialCheck="";
										}
                                    }
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($material['material']); ?>" <?php echo @$materialCheck?>  name="material[]" class="sort_rang material"><?php echo ucfirst($material['material']); ?></label></div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelFour" aria-expanded="true"><b>RAM</b></h3></div>
                            <div class="panel-body collapse in" id="panelFour">
                                <ul class="list-group">
                                    <?php foreach ($productSizes as $key => $productSize) {
                                        if(isset($_POST['size'])){
                                            if(in_array($productSize['size'],$_POST['size'])) {
                                                $sizeCheck='checked="checked"';
                                            } else {
												$sizeCheck="";
                                            }
                                        }
                                    ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $productSize['size']; ?>" <?php echo @$sizeCheck; ?>  name="size[]" class="sort_rang size"><?php echo $productSize['size']."GB"; ?></label></div>
                                    </li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="col-lg-9 col-md-8">
                        <div class="row">
                            <div id="results"></div>
                        </div>
                    </section>
                </div>
				<input type="hidden" id="totalRecords" value="<?php echo $totalRecords; ?>">
            </form>
        </div>        
    </div>    </div>
<script src="js/script.js"></script>		
<?php include('inc/footer.php');?>
