<div class="row-fluid page-main-wrap">

<?php while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>


<div class="availability-wrapper span12">
    
   <div class="availability-item">
      
      <h3 class="availability-hdr">Siesta Key</h3>
    
        <div class="availability-content span12">
        
          <div class="availability-pic span4">
              <img src="http://fakeimg.pl/150x150/">
          </div> <!-- end availability picture -->
       
        <div class="availability-details span4">
        
            <h4>Rent:</h4> <span> $859</span>
            <h4>Deposit:</h4> <span> $250 - $600</span>        
            <h4>Beds / Baths:</h4> <span> Studio / 1 Bath </span>        
        
        </div>  <!-- end Availability Details -->
        
        <div class="availability-contact span4">
              <a href="/floor-plans/#siesta-key" title="Siesta Key Floor Plan" class="btn btn-info btn-small">More Info</a>
              <h6>Currently only <strong>2</strong> Left!</h6>
        </div> <!-- end availability contact -->
        
        
      </div> <!-- end Availability Content -->
   </div> <!-- end availability item -->
  
</div> <!-- end availability wrapper -->

<div class="availability-wrapper span12">
    
   <div class="availability-item">
      
      <h3 class="availability-hdr">Over Achiever</h3>
    
        <div class="availability-content span12">
        
          <div class="availability-pic span4">
              <img src="http://fakeimg.pl/150x150/">
          </div> <!-- end availability picture -->
       
        <div class="availability-details span4">
        
            <h4>Rent:</h4> <span> $959</span>
            <h4>Deposit:</h4> <span> $350 - $700</span>        
            <h4>Beds / Baths:</h4> <span> 1 Bed / 1 Bath </span>        
        
        </div>  <!-- end Availability Details -->
        
        <div class="availability-contact span4">
              <a href="/floor-plans/#over-achiever" title="Siesta Key Floor Plan" class="btn btn-info btn-small">More Info</a>
              <h6>Currently only <strong>1</strong> Left!</h6>
        </div> <!-- end availability contact -->
        
        
      </div> <!-- end Availability Content -->
   </div> <!-- end availability item -->
  
</div> <!-- end availability wrapper -->


</div>