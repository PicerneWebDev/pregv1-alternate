<?php 
/**
 * Amenities Content
 */
?>

<div class="row-fluid page-main-wrap">

<?php while (have_posts()) : the_post(); ?>
    <?php  the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

 
<?php endwhile; ?>

<!-- Begin The Amenities Listing -->
  <div class="amenities-wrapper">

	<h4>Community Amenities</h4>

    <div class="amenities-item span12">
    <div class="span6">
    <img src="<?php echo get_bloginfo('url');?>/assets/laurel-point-amenities.jpg" alt="Laurel Point Senior Aparment Homes - Community Amenities" width="300" height="200" class="alignleft size-medium" />
    </div>
    <div class="span6">
       <ul class="amenities-list-items">
            <li>Beautiful Landscaping</li>
            <li>Clubhouse</li>
            <li>Business Center with Computers and Free Wi-Fi access</li>
            <li>Copy &amp; Fax Services</li>
            <li>Easy Access to Freeways</li>
            <li>Laundry Facility</li>
            <li>Picnic Area with Barbecue</li>
            <li>State-Of-The-Art Fitness Center</li>
            <li>Beautiful and Relaxing Swimming Pool</li>
        </ul>
      </div>
    </div>
    
    
    <h4>Apartment Amenities</h4>
    
    <div class="amenities-item span12">
    <div class="span6">
    <img src="<?php echo get_bloginfo('url');?>/assets/laurel-point-features.jpg" alt="Laurel Point Senior Aparment Homes - Apartment Amenities" width="300" height="200" class="alignleft size-medium" />
    </div>
    <div class="span6">
       <ul class="amenities-list-items">
       		 <li>9ft Ceilings</li>
            <li>Air Conditioning</li>
            <li>All Electric Kitchen</li> 
            <li>Cable Ready</li> 
            <li>Carpeted Floors</li>
            <li>Ceiling Fan(s)</li>
            <li>Disability Access</li>            
            <li>Dishwasher</li>  
            <li>Extra Storage</li>  
            <li>Garbage Disposal</li>
            <li>Large Utility Room</li>
            <li>Multiple Telephone outlets</li>
        </ul>
      </div>
    </div>
   

  </div> <!-- end Amenities Wrapper -->
</div> <!-- end row-fluid -->