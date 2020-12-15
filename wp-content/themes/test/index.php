<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>
<div class="top-banner" style="background-image: url(<?php echo the_field('kartinka_dlya_verhnego_banera', 2)?>)">
    <div class="top-banner__content">
        <div class="top-banner__title">
            <?php the_field('zagolovok_v_verhnem_banere', 2)?>
        </div>
        <div class="top-banner__subtitle">
            <?php the_field('podzagolovok_dlya_verhnego_banera', 2)?>
        </div>
        <div class="top-banner__lnk">
            <a href="#">наши сервисы</a>
        </div>
    </div>
    <a href="#services" class="top-banner__next">
        <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.5833 14.5947L12.0833 28.4601L0.583252 14.5947H3.27022L12.0833 25.2181L20.8963 14.5947H23.5833Z" fill="white"/>
        </svg>
    </a>
</div>
<div class="services" id="services">
    <div class="services__header">
        <div class="services__sub-title block-sub-title">
            <?php the_field('gagolovok_sekczii_uslugi', 2)?>
        </div>
        <div class="services__title block-title">
            <?php the_field('zagolovok_uslugi', 2)?>
        </div>
    </div>
    <ul class="services__content container">
        <div class="left-clipart">
            <img src="<?php echo get_template_directory_uri() . '/images/left-clipart.svg';?>" alt="">
        </div>
        <div class="right-clipart">
            <img src="<?php echo get_template_directory_uri() . '/images/right-clipart.svg';?>" alt="">
        </div>
        <?php
        $args = array(
            'post_type' => 'services',
            'showposts' => "-1", //сколько показать статей
            'orderby' => "", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        $counter = 1 ;
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $thumb_id = get_post_thumbnail_id();
                $my_query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                <li class="services__item" style="background-image: url('<?php echo $url ?>')">
                    <div class="services__item-count">
                        <span>
                            <?php echo '0'. $counter;
                            $counter++;
                            ?>
                        </span>
                    </div>
                    <div class="services__item-title">
                        <?php the_title();?>
                    </div>
                    <div class="services__item-excerpt">
                        <?php the_excerpt();?>
                    </div>
                    <div class="services__item-lnk">
                        <a href="<?php echo the_permalink();?>">
                            Детальнее
                        </a>

                    </div>
                </li>
            <?php }
        }
        wp_reset_query(); ?>
    </ul>
    <div class="services__lnk">
        <a href="#">
            Детальнее
        </a>
    </div>
</div>
<div class="activity">
    <div class="services__header">
        <div class="services__sub-title block-sub-title">
            <?php the_field('podzagolovok_dlya_sfera_deyatelnosti', 2)?>
        </div>
        <div class="services__title block-title">
            <?php the_field('zagolovok_dlya_sfera_deyatelnosti', 2)?>
        </div>
    </div>
    <ul class="activity__list">
        <?php
        $args = array(
            'post_type' => 'activity',
            'showposts' => "-1", //сколько показать статей
            'orderby' => "", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $thumb_id = get_post_thumbnail_id();
                $my_query->the_post();
                ?>
                <li class="activity__item">
                    <div class="activity__item-img item-img">
                        <img class="item-img__top svg" src="<?php echo the_field('ikonka_verhnyaya')?>" alt="<?php the_title();?>">
                        <img class="item-img__bottom svg" src="<?php echo the_field('ikonka_nizhnyaya')?>" alt="<?php the_title();?>">
                    </div>
                    <div class="item-img__title">
                        <?php the_title();?>
                    </div>
                </li>
            <?php }
        }
        wp_reset_query(); ?>
    </ul>
</div>
<?php
get_footer();
