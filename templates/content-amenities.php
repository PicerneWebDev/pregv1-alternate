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
    <img src="<?php echo get_bloginfo('url');?>/assets/parkside-point-amenities.jpg" alt="Parkside Point Aparment Homes - Community Amenities" width="300" height="200" class="alignleft size-medium" />
    </div>
    <div class="span6">
       <ul class="amenities-list-items">
            <li>Access to Public Transportation</li>
            <li>Beautiful Landscaping</li>
            <li>Business Center</li>
            <li>Children's Play Area</li>
            <li>Clubhouse</li>
            <li>Copy &amp; Fax Services</li>
            <li>Easy Access to Freeways</li>
            <li>Easy Access to Shopping</li>
        </ul>
      </div>
    </div>
    
    
    <h4>Apartment Amenities</h4>
    
    <div class="amenities-item span12">
    <div class="span6">
    <img src="<?php echo get_bloginfo('url');?>/assets/parkside-point-apt-amenities.jpg" alt="Parkside Point Aparment Homes - Apartment Amenities" width="300" height="200" class="alignleft size-medium" />
    </div>
    <div class="span6">
       <ul class="amenities-list-items">
       		 <li>Air Conditioning</li>
            <li>All Electric Kitchen</li> 
            <li>Breakfast Bar</li> 
            <li>Cable Ready</li>
            <li>Carpeted Floors</li>
            <li>Ceiling Fan(s)</li>            
            <li>Central Air/Heating</li>  
            <li>Dishwasher</li>  
            <li>Garbage Disposal</li>
            <li>Mini Blinds</li>
        </ul>
      </div>
    </div>
   

  </div> <!-- end Amenities Wrapper -->
</div> <!-- end row-fluid -->