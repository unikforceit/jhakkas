<?php
/*
	Template Name: Front Page
	Design Theme's Front Page to Display the Home Page if Selected
	
*/
get_header(); ?>


<section class="bannerSection">
			 
                        <div class="row">
						<div class="col-12">
						<div class="arblgc">
						<h1><?php 
					if ( get_theme_mod( 'header_heading' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header_heading' ) ) . '';
					} else
					{
						echo __('We Provide Awesome!', 'jhakkas');
					}?>
					</h1> <span class="subpcl">
					<?php 
					if ( get_theme_mod( 'header_sub_heading' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header_sub_heading' ) ) . '';
					} else
					{
						echo __('Either they are inward, or they have no pleasures, or even a desire to shun something. Not the times of things.', 'jhakkas');
					}?> </span>
			</div></div></div> 
		</section>

 

    <!-- Page Content -->
        <div class="section   services">
        <div class="container">
                        <div class="row">
						
						<?php
				jhakkas_services();
				?>
						
						
						
						
                         
                              
                              
                      
                             
                        </div>
                        <!-- /.row -->
                    </div></div>
        
     
        
    
        
        
                
        
        
        
        

 
 
<?php get_footer(); ?>
