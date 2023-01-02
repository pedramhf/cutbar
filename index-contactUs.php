<?php $web_contactus_group=pedro_get_option('web_contactus_group'); ?>
<section id="contact" class="row contact-us pt-5"  style="background-image:url(<?php $back=$web_contactus_group[0]['thumbnail'];echo $back ?>) ;background-image:rgba(0,0,0,0.5); background-size: cover;background-repeat: no-repeat;" >
          <div class="form-left col-lg-6 col-12" >
            <h5><?php $title=$web_contactus_group[0]['title'];echo $title ?></h5>
            <p><?php $context=$web_contactus_group[0]['context'];echo $context ?></p>
            <?php  $form=$web_contactus_group[0]['form'];echo do_shortcode($form); ?>
           
          </div>
          <div class="form-right col-lg-6 col-12">
    
         
          </div>
        </section>