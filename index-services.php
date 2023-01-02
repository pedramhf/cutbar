


<section class="row services " id="services">
  <!-- <h3 class="text-center mb-3">Services</h3> -->
<?php $web_services_group=pedro_get_option('web_services_group');
foreach($web_services_group as $item) { ?>
          <div class="card bg-dark col-lg-3 col-md-4 col-12">
            <img
              class="card-img-top"
              src="<?php echo $item['thumbnail'] ?>"
              alt="Card image cap"
            />
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $item['title'] ?></h5>
              <p class="card-text">
              <?php echo $item['context'] ?>
              </p>
            </div>
          </div>
            <?php } ?>
          <div class="row service-photos">
            <?php $web_servicesphoto_group=pedro_get_option('web_servicesphoto_group');
            foreach($web_servicesphoto_group as $item) {?>
            <div class="col-lg-3 col-md-4 col-12 p-0 text-center">
              <img src="<?php echo $item['thumbnail'] ?>" alt="services-photo" />
              <p><?php echo $item['context'] ?></p>
            </div>
            <?php }?>
            
          </div>
        </section>