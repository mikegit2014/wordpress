<?php  
ob_start() ;
$options = _WSH()->option();
?>
<?php if($style == 2):?>
<!--Sponsors-->
<section class="sponsors style-two" <?php if($bg_img):?>style="background-image:url('<?php echo wp_get_attachment_url($bg_img, 'full');?>');"<?php endif;?>>
    	<div class="auto-container">
        	<ul class="slider">
            	
                <?php if($clients = meeton_set(meeton_set($options, 'clients'), 'clients')):?>
				<?php foreach($clients as $key => $value):?>
                <?php if(meeton_set($value, 'tocopy')) continue;?>
                
            	<li><a href="<?php echo esc_url(meeton_set($value, 'client_link'));?>"><img src="<?php echo esc_url(meeton_set($value, 'client_img'));?>" alt="" title="<?php echo meeton_set($value, 'title');?>"></a></li>
                
                <?php endforeach;?>
        		<?php endif;?>
                
            </ul>
        </div>
    </section>

<?php else:?>
<!--Sponsors-->
    <section class="sponsors">
    	<div class="auto-container">
        	<ul class="slider">
            	
                <?php if($clients = meeton_set(meeton_set($options, 'clients'), 'clients')):?>
				<?php foreach($clients as $key => $value):?>
                <?php if(meeton_set($value, 'tocopy')) continue;?>
                
            	<li><a href="<?php echo esc_url(meeton_set($value, 'client_link'));?>"><img src="<?php echo esc_url(meeton_set($value, 'client_img'));?>" alt="" title="<?php echo meeton_set($value, 'title');?>"></a></li>
                
                <?php endforeach;?>
        		<?php endif;?>
                
            </ul>
        </div>
    </section>
	
<?php endif;?>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   