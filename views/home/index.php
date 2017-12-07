<?php
include('include/demo.php');
include('include/products.php');
?>
<div class="container-fluid nopadding">
    <div class="col-md-12" id="consumer-header">
      <div class="col-md-12">
        <h1 class="display-3">Insecure passwords have long been the standard when it comes to authentication</h1>
      </div>
      <div class="col-md-12">
        <h3>Let's change that</h3>
        <a href="#learn-more"><button type="button" class="btn btn-primary btn-lg classy-button">Learn More</button></a>
      </div>
    </div>


<!--Demo-->
<div id="demo">
 <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
   <div class="main-heading"><a id="learn-more"></a>
     <h2>See it in action</h2>
     <p>Understand how dynamic authentication works and how you can benefit from it</p>
   </div>
</div>
</div>

 <div class="col-md-12">
  <?php getDemo() ?>
</div>

 <!--Products-->
 <div id="products">
     <div class="row">
       <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
         <div class="main-heading">
           <h2>Our Products</h2>
           <p>We offer both enterprise and consumer products</p>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-sm-12 col-md-6 products-table-overflow">
         <h2>Consumer Products</h2>
         <?php printProducts($viewbag, 'consumer'); ?>
       </div>

       <div class="col-sm-12 col-md-6 products-table-overflow">
         <h2>Enterprise Products</h2>
         <?php printProducts($viewbag, 'enterprise'); ?>
       </div>
     </div>
</div>
	<!--about bg-->
	<div id="about-bg">

		<div class="container">
			<div class="row">

				<div class="about-bg-heading">
					<h1>sucessful stats about us</h1>
					<p>what we have achieved so far</p>
				</div>

				<div class=" col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><span class="border">32</span>15</h1>
					</span>
					<p>happy clients</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="about-bg-wrapper">
					<span class="count"><h1>2217</h1></span>
					<p>projects</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="about-bg-wrapper">
					<span class="count"><h1>1522</h1></span>
					<p>branches</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="about-bg-wrapper">
					<span class="count"><h1>3151</h1></span>
					<p>expert team</p>
				</div>
			</div>

		</div>
	</div>

	<div class="cover"></div>

</div>
</div>
