<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package banco
 */
get_header(); ?>
    
<?php
$home_post_id = get_post_id_by_key('home_featured_image');
$feat_image = get_field('home_featured_image',$home_post_id);
$feat_text = get_field('home_featured_text',$home_post_id);
$button_1_text = get_field('button_1_text',$home_post_id);
$button_1_link = get_field('button_1_link',$home_post_id);
$button_2_text = get_field('button_2_text',$home_post_id);
$button_2_link = get_field('button_2_link',$home_post_id);
$google_play_url = get_field('google_play_url',$home_post_id);
$apple_store_url = get_field('apple_store_url',$home_post_id);
?>

    <div class="home-header clear">
       <div class="bg"><div></div></div>
        <div class="feat-content clear container">
            <div class="home-feat-text col">
                <?php if($feat_text) { ?>
                <div class="textwrap">
                    <?php echo $feat_text;?>
                </div>
                <?php } ?>
                
                <div class="cta-button-div clear">
                    <?php if($button_1_text && $button_1_link) { ?>
                    <a class="cta-button btn1 btn-style2" href="<?php echo $button_1_link;?>"><span><?php echo $button_1_text;?></span></a>
                    <?php } ?>

                    <?php if($button_2_text && $button_2_link) { ?>
                    <a class="cta-button btn2 btn-style2" href="<?php echo $button_2_link;?>"><span><?php echo $button_2_text;?></span></a>
                    <?php } ?>
                 </div>    
                
                <div class="appurl clear flexbox">
                    <?php if( $google_play_url ) { ?>
                    <span class="btnwrap b1">
                        <a href="<?php echo $google_play_url;?>" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_google.png" alt="Google Play">
                        </a>
                    </span>
                    <?php } ?>
                    
                    <?php if( $apple_store_url ) { ?>
                    <span class="btnwrap b2">
                        <a href="<?php echo $apple_store_url;?>" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_apple.png" alt="Apple Store">
                        </a>
                    </span>
                    <?php } ?>
                </div>
            </div>
            <div class="home-feat-image col">
                <?php if($feat_image) { ?>
                <div class="imgwrap">
                    <img src="<?php echo $feat_image;?>" alt="" />
                </div>
                <?php } ?>
            </div>
         </div>    
    </div>

<?php
    $mid_content_title = get_field('mid_content_title',$home_post_id);
    $mid_content_subtitle = get_field('mid_content_subtitle',$home_post_id);
    $columns_content = get_field('columns_content',$home_post_id);
?>
    
<div class="midcontent clear container">    
    <div class="titlediv">
        <?php if($mid_content_title) { ?>
            <h2 class="mid-title"><?php echo $mid_content_title;?></h2>
        <?php } ?>
        <?php if($mid_content_subtitle) { ?>
            <h3 class="mid-title"><?php echo $mid_content_subtitle;?></h3>
        <?php } ?>
    </div>
    
    <?php if($columns_content) { 
        $countCol = count($columns_content); 
        $colClass = 'three';
        if($countCol % 3 == 0)  {
            $colClass = 'three';
        } else if( $countCol % 4 == 0 ) {
            $colClass = 'four';
        } else if( $countCol== 2 ) {
            $colClass = 'two';
        }
        
        ?>
        <div class="columns clear flexbox <?php echo $colClass?>">
            <?php foreach($columns_content as $arr) { 
                $c_title = $arr['column_title'];
                $c_text = $arr['column_text'];
                $c_icon = $arr['column_icon'];
            ?>
            <div class="column">
                <div class="pad clear">
                    <div class="icon">
                        <?php if( $c_icon ) { ?>
                            <span class="iconImg"><img src="<?php echo $c_icon;?>" alt="" /></span>
                        <?php } else { ?>
                            <span class="noIcon"></span>
                        <?php } ?>
                    </div>    
                    <?php if( $c_title ) { ?>
                        <h3 class="col-title"><?php echo $c_title;?></h3>
                    <?php } ?>
                    <?php if( $c_text ) { ?>
                        <div class="col-text"><?php echo $c_text;?></div>
                    <?php } ?>
                </div>    
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
</div>


<?php
get_footer();
