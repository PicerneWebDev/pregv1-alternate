<div class="row-fluid footer">
<div class="seperation"><div class="seperation-left"></div><div class="seperation-right"></div></div>
  <footer class="content-info" role="contentinfo">
    <div class="container">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      
		<div class="foot-widg-wrap span3">
   			<div class="footer-title"><h4>Pay Us A Visit!</h4></div>
			   
               <?php $propContactInfo = get_option("prop-contact-info");  //Retrieve the Property Settings   ?>

               <!-- Begin Schema.org for Apartment Complex -->  
               <div itemscope itemtype="http://schema.org/ApartmentComplex">
                <p class="apt-schema">
                  <a class="name" itemprop="url" href="<?php echo home_url('/'); ?>"><span itemprop="name"><?php bloginfo('name'); ?></span></a><br>
                  <span class="apt-adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span class="street-addr" itemprop="streetAddress"><?php echo $propContactInfo['prop-addr-ln-one']; ?> 
                      <?php if($propContactInfo['addrTwo']) echo '<br>' .$propContactInfo['prop-addr-ln-two']; ?>
                    </span><br>
                    <span class="apt-locality" itemprop="addressLocality"><?php echo $propContactInfo['prop-city']; ?></span>,
                    <span class="apt-region" itemprop="addressRegion"><?php echo $propContactInfo['prop-state']; ?></span>
                    <span class="apt-postal-code" itemprop="postalCode"><?php echo $propContactInfo['prop-zip']; ?></span><br>
                  </span>
                  <br>
                  <span class="apt-tel"><strong>Phone:</strong> <span class="value" itemprop="telephone"><a href="tel:4078893710"><?php echo $propContactInfo['prop-phone']; ?></a></span></span><br>
                  <span class="apt-fax"><strong>Fax: </strong><span class="value" itemprop="faxNumber"><?php echo $propContactInfo['prop-fax']; ?></span></span><br>
                  
                  <span class="apt-google-map-img"></span><span class="apt-google-map"><a href="<?php echo $propContactInfo['prop-google-map-url'];?>" title="Get Directions to <?php echo get_bloginfo('name');?> on Google" target="_blank" itemprop="map">Get Directions</a></span><br>
                </p>
               </div> <!-- end Schema.org -->

		</div>      
      
     <div class="span12 copyright">
     	 <span>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - All Rights Reserved</span>
         
		 <?php if( $propContactInfo['prop-eho']){	//Display the EHO icon ?>
          <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eho.png" alt="Equal Housing Opportunity" width="" height=""></span>
         <?php }?>
         
         <?php if( $propContactInfo['prop-handicap']) {	//Display the Handicap Accessible Icon ?>
         <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ha.png" alt="Equal Housing Opportunity" width="" height=""></span>
         <?php }  ?>
     </div>
    </div>
  </footer>
</div> <!-- End Footer class -->

<?php wp_footer(); ?>
