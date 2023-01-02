

<?php $web_welcome_group=pedro_get_option('web_welcome_group');?>
<div class="">
        <section class="welcome" id="about">

          <div class="d-flex flex-column align-items-center text-center">
            <span class="welcome-span"><?php echo $web_welcome_group[0]['welcome']; ?></span>
            <h1 class="welcome-h1 mb-5"><?php echo $web_welcome_group[0]['barbershop']; ?></h1>
            <p class="welcome-p p-5">
            <?php echo $web_welcome_group[0]['context']; ?>
            </p>
          </div>
        </section>