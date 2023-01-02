<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- header-start -->
    <?php $web_general_option=pedro_get_option("web_general_group") ;?>
    <header class="my-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg ">
          
            <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand ms-4" href="home"
              ><img class="logo" src="<?php $logo=$web_general_option[0]['title']; echo $logo ?>" alt="logo"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#mynavbar"
              aria-controls="mynavbar"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"
                ><i class="fa-solid fa-bars my-toggler"></i
              ></span>
            </button>
            </div>
            <div class="container-fluid justify-content-center">
            <div
              class="collapse navbar-collapse justify-content-end"
              id="mynavbar"
            >
            <?php wp_nav_menu(array(
                    'theme_location'=>'main-menu',
                    'container'=>'ul',
                    'menu_class'=>'navbar-nav'
                    
                  )) ?>
                 
              <!-- <ul class="navbar-nav">
                <li class="nav-item text-center">
                  <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item text-center">
                  <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item text-center">
                  <a href="#" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item text-center">
                  <a href="#" class="nav-link">Blog</a>
                </li>
                <li class="nav-item text-center">
                  <a href="#" class="nav-link">Contacts</a>
                </li>
              </ul> -->
            </div>
          </div>
        </nav>
      </div>
      <a class="arrow" href="#"><i class="fa-solid fa-angles-up"></i></a>
    </header>