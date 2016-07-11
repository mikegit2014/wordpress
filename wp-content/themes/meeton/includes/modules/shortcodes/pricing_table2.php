<?php ob_start(); ?>

<!--Table Column-->
<article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="table-inner hvr-sweep-to-right">
        <div class="clearfix">
            <div class="half-column price">
                <h4 class="amount"><sup><?php echo balanceTags($currency);?></sup><?php echo balanceTags($price);?></h4>
                <p><?php echo balanceTags($title);?></p>
            </div>
            <div class="half-column list">
                <h3><?php esc_html_e('This includes:', 'meeton');?></h3>
                <ul>
                
                <?php $fearures = explode("\n",$feature_str);?>
                    <?php foreach($fearures as $feature):?>
                
                    <li><?php echo balanceTags($feature);?></li>
                    
                <?php endforeach;?>
                
                </ul>
            </div>
        </div>
        
        <a href="<?php echo esc_url($btn_link);?>" class="read-more hvr-bounce-to-right"><span class="fa fa-play"></span> <?php echo balanceTags($btn_text);?></a>
    </div>
</article>
                
<?php return ob_get_clean(); 