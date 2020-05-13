<?php
/*
Template Name: Contact
*/

 ?>


 <?php get_header(); ?>

 <div class="container">
   <h1 class="title"> <?php the_title(); ?> </h1>

   <div class="row">
     <div class="col-lg-6">
        <!-- contact form -->
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="FormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
          </div>
        </form>
     </div>
     <div class="col-lg-6">

          <?php get_template_part('includes/section','content'); ?>
     </div>
   </div>


 </div>

 <?php get_footer(); ?>
