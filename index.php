<?php get_header()?>
<div class="content">
<?php if(have_posts()):?>
    <?php while(have_posts()):the_post();?>

		<a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?> </a>
		<?php the_meta(); ?> 
        <?php the_content('','','');?>
        	
       
    <?php endwhile;?>
<?php else:?>

<?php endif;?>
 </div>
<?php get_footer()?>