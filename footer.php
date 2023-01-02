<footer>
<section class="row  align-items-center location" id="location">
<div class="location-item  col-lg-4 col-12 ">
<?php $web_location_group=pedro_get_option('web_location_group');?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.1123987288124!2d-80.25064978437591!3d43.54169887912528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9b33226652eb%3A0x643ef22a61e2db68!2sCUT%20BAR!5e0!3m2!1sen!2sca!4v1670461679561!5m2!1sen!2sca" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   


 
    <p class="text-light text-center">5 Gordon Street North<br>
Guelph, ON N1H 4G8
Canada</p>
</div>    
<div class="location-item col-lg-4 col-12 ">
   
<?php $web_hours_group=pedro_get_option('web_hours_group');?>
<table class="table text-center table-dark">
  
  <tbody>
    <tr>
      
      <td>Mon:</td>
      <td><?php echo $web_hours_group[0]['monday'];?></td>
     
    </tr>
    <tr>
      
      <td>Tue:</td>
      <td><?php echo $web_hours_group[0]['tuesday'];?></td>
     
    </tr>
    <tr>
      
      <td>Wed:</td>
      <td><?php echo $web_hours_group[0]['wednesday'];?></td>
     
    </tr>
    <tr>
      
      <td>Thu:</td>
      <td><?php echo $web_hours_group[0]['thursday'];?></td>
     
    </tr>
    <tr>
      
      <td>Fri:</td>
      <td><?php echo $web_hours_group[0]['friday'];?></td>
     
    </tr>
    <tr>
      
      <td>Sat:</td>
      <td><?php echo $web_hours_group[0]['saturday'];?></td>
     
    </tr>
    <tr>
      
      <td>Sun:</td>
      <td><?php echo $web_hours_group[0]['sunday'];?></td>
     
    </tr>
   
  </tbody>
</table>
	
</div> 
<div class="location-item  col-lg-4 col-12  d-flex flex-column justify-content-center align-items-center">
<h3 class="text-light" id="contact">Get in Touch</h3>
<a class="btn btn-success mb-1" href="tel:+1-226-600-4449"><i class="fa-solid fa-phone mx-2 "></i>(226) 600 - 4449</a>

<ul class="nav">
 <?php $web_social_group=pedro_get_option('web_social_group');
 foreach($web_social_group as $item){ ?>
 <li class="nav-item">
 <a class="nav-link " href="<?php echo $item['link'];?>"><i class=" fa-brands fa-<?php echo $item['icon']; ?>"></i></a>
</li>
 <?php } ?>
 
 </ul>
 

</div>   

</section>
<div class="text-muted text-center">©2022 Developed by <a href="https://www.linkedin.com/in/pedramhashemi/" class="text-muted">Pedro</a></div>
</footer>
<?php wp_footer(); ?>
  </body>
  
</html>