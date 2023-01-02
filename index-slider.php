<section class="my-carousel">
        <div id="my-carousel" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
          <?php $web_slider_group=pedro_get_option('web_slider_group'); 
            $count=0;
            foreach($web_slider_group as $item){
            ?>
            <button
              type="button"
              data-bs-target="#my-carousel"
              data-bs-slide-to="<?php echo $count ?>"
              class="<?php $class=$count==0 ? 'active':'';echo $class ?>"
              
              aria-label="Slide <?php echo $count ?>"
            ></button>
            <?php $count++;} ?>
          </div>
          <div class="carousel-inner">
            <?php $web_slider_group=pedro_get_option('web_slider_group'); 
            $counter=1;
            foreach($web_slider_group as $item){
            ?>
            <div class="carousel-item <?php $class=$counter==1 ? 'active':'';echo $class ?> " >
            <div class="item"><img

src="<?php echo $item['thumbnail'] ?>"
class=" d-block w-100"
alt="carousel-<?php echo $counter ?>"
/></div>
              
             
            
              <div class="carousel-caption ">
                <h5><?php echo $item['title'] ?></h5>
                <h3><?php echo $item['news'] ?></h3>
                <p><?php echo $item['text'] ?></p>
              <a class="btn btn-success mb-1" href="tel:+1-226-600-4449"><i class="fa-solid fa-phone mx-2 "></i>(226) 600 - 4449</a>

              </div>
            </div>
            <?php $counter++ ;} ?>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#my-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#my-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>