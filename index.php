<?php get_header();?>
    <!-- header-end -->

    <!-- main start-->
    <main>
      <!-- carousel-start -->
      <?php get_template_part("template/index","slider") ?>
      <!--carousel-end -->
      <!-- start-welcome -->
      <?php get_template_part("template/index","welcome") ?>
      
        <!-- end-welcome -->
        <!-- start-gallery -->

      <?php get_template_part("template/index","gallery") ?>
        
        <!-- end-gallery -->
        <?php get_template_part("template/index","more") ?>
        <!-- start-services -->
        <?php get_template_part("template/index","services") ?>
        
        <!-- end-services -->
        <!-- start-contact-us -->
        <?php get_template_part("template/index","contactUs") ?>
        
        <!-- end-contact-us -->
       
       
       <!-- start-more --> 
     
      </div>
    </main>
    <!-- footer-start -->
    <?php get_footer();?>
   
