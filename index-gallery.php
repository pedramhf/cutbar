<section class="gallery">
          <div class="container">
            <div class="photos-container">
              <div class="row">
                <?php $web_gallery_group=pedro_get_option('web_gallery_group') ;
                foreach($web_gallery_group as $item) {?>
                <div class="col-lg-4 col-md-6 col-12 p-2 gallery-container"  >
                
                <img class=""
                <?php if ($item['video']) { ?>
                onmouseover="this.src='<?php echo $item['video'] ?>'" 
                onmouseleave="this.src='<?php echo $item['thumbnail'] ?>'" 
                <?php } ?>
                
                  src="<?php echo $item['thumbnail'] ?>"
                  alt="<?php echo $item['alt'] ?>"
                />
                <?php if ($item['video']) { ?>
                <span class="text-gallery"><i class="fa-solid fa-play"></i></span>
                <?php } ?>
              </div>
              <?php } ?>
              
                
              </div>
             
            </div>
            
          </div>
        </section>