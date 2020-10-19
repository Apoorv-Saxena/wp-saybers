<?php
if ( function_exists( 'get_field' ) ) {
// Custom Fiedds
$work_type  = get_field('work_type');
// Testimonial Section(Clients Says)
$client_name  = get_field('client_name');
$clients_testimonial  = get_field('clients_testimonial');
// Teams Section
$team_member_name  = get_field('team_member_name');
$facebook_profile_link  = get_field('facebook_profile_link');
$twitter_profile_link  = get_field('twitter_profile_link');
$youtube_profile_link  = get_field('youtube_profile_link');
$linkedin_profile_link  = get_field('linkedin_profile_link');
// Services section
$service_icon  = get_field('service_icon');
$service_description  = get_field('service_description');
}
?>
<?php get_header(); ?>
<!--banner area starts-->

<div id="home" class="slider-area container-fluid main custom-padding">

    <div class="slider-area-overlay">
        <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner" role="listbox">
                <div class="item active background bgd-one"></div>
                <div class="item background bgd-two"></div>
                <div class="item background bgd-three"></div>
            </div>
        </div>

        <div class="slider-middle-text">
            <div class="home-table">
                <div class="home-table-cell">
                    <div class="container">

                        <div class="row">

                            <div class="col-sm-12 banner-text-area text-center">
                                <h2 class="banner-text">
                                    <?php bloginfo('name'); ?>
                                </h2>
                                <h1><?php bloginfo('description'); ?></h1>
                                <div class="slide-btn">
                                    <a class="active my-btn-1" href="#contact">Make Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--banner area ends-->

<!--about area starts-->
<?php if ( "on" == get_theme_mod( 'toggle_about_us', 'on' ) ) : ?>
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_about','About Us' ) ?></h2>
                    <div class="line"><img src="<?php echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_about_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?><?php echo get_option('page_on_front'); ?><?php echo get_the_ID() ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="about-video">
                    <div class="single-video">
                        <a href="<?php echo get_theme_mod( 'link_about','https://www.youtube.com/watch?v=E7A5rXHp_AI' ) ?>" class="video-play mfp-iframe">
                            <!--change video url-->
                            <i class="fa fa-play"></i>
                        </a>
                        <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'image_about','images/about/about.jpg' ) ); ?>" alt="about image">
                        <!--change image-->
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="about-main">
                    <!--<h3>Why Choose Us?</h3>-->
                    <h2><?php echo get_theme_mod( 'text_about_sub_heading','25 Years of Experience' ) ?></h2>
                    <div class="single-about">
                        <p><?php echo get_theme_mod( 'text_about_sub_dec','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' ) ?></p>
                    </div>
                    <a href="#contact" class="smooth-menu">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>

<!--about area ends-->

<!--Services Area Starts-->
<?php if ( "on" == get_theme_mod( 'toggle_our_services', 'on' ) ) : ?>
<div id="services" class="services-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_services','Our Services' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_services_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="services-carousel" class="owl-carousel owl-theme">

                <?php
        $our_service_args = array(
        'post_type'     =>  'our_service',
            
       /*NO OF POSTS ON PAGE*/
            
        //'posts_per_page' => 10
        );
        $our_service_posts = new WP_Query($our_service_args);
        while($our_service_posts->have_posts()) {
            $our_service_posts->the_post();
            $title= get_the_title();
    ?>
                <div class="single-services text-center item">
                    <div class="services-icon">
                        <i class="<?php the_field('service_icon'); ?>"></i>
                    </div>
                    <div class="services-content">
                        <h3><?php echo $title; ?></h3>
                        <!--edit the service you give-->
                        <p><?php the_field('service_description'); ?></p>
                    </div>

                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>

<!--Services Area Ends-->

<!--statistic area starts-->
<?php if ( "on" == get_theme_mod( 'toggle_our_statistic', 'on' ) ) : ?>
<div class="statistic-area">
    <div class="sts-overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-count count-one xs-mb-30 sm-mb-30">
                        <i class="<?php echo get_theme_mod( 'one_stat_icon','icon icon-clock' ) ?>"></i>
                        <h2 class="count"><?php echo get_theme_mod( 'one_stat_num','25' ) ?></h2>
                        <!--edit here-->
                        <p><?php echo get_theme_mod( 'one_stat_dec','Years of Experience' ) ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-count count-two xs-mb-30 sm-mb-30">
                        <i class="<?php echo get_theme_mod( 'two_stat_icon','icon icon-genius' ) ?>"></i>
                        <h2 class="count"><?php echo get_theme_mod( 'two_stat_num','75' ) ?></h2>
                        <!--edit here-->
                        <p><?php echo get_theme_mod( 'two_stat_dec','Efficient Barbers' ) ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-count count-three xs-mb-30">
                        <i class="<?php echo get_theme_mod( 'three_stat_icon','icon icon-happy' ) ?>"></i>
                        <h2 class="count"><?php echo get_theme_mod( 'three_stat_num','950' ) ?></h2>
                        <!--edit here-->
                        <p><?php echo get_theme_mod( 'three_stat_dec','Happy Customers' ) ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-count count-four">
                        <i class="<?php echo get_theme_mod( 'four_stat_icon','icon icon-trophy' ) ?>"></i>
                        <h1 class="count"><?php echo get_theme_mod( 'four_stat_num','150' ) ?></h1>
                        <!--edit here-->
                        <p><?php echo get_theme_mod( 'four_stat_dec','Business Awards Won' ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!--statistic area ends-->

<!--team area starts-->
<?php if ( "on" == get_theme_mod( 'toggle_our_team', 'on' ) ) : ?>
<div id="team" class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_team','Our Team' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_team_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
        $team_member_args = array(
        'post_type'     =>  'team_member',
            
       /*NO OF POSTS ON PAGE*/
            
        'posts_per_page' => 4
        );
        
        $team_member_posts = new WP_Query($team_member_args);
        while($team_member_posts->have_posts()) {
            $team_member_posts->the_post();
    ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-item xs-mb-30 sm-mb-30">
                    <div class="imgg-area">
                        <?php the_post_thumbnail('team-thumb') ?>
                        <!--edit image-->
                    </div>
                    <div class="team-social-icons">
                        <a href="<?php the_field('facebook_profile_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?php the_field('twitter_profile_link'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="<?php the_field('youtube_profile_link'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="<?php the_field('linkedin_profile_link'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <h4><?php the_field('team_member_name'); ?><span><?php the_field('member_post'); ?></span></h4>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php endif; ?>
<!--team area ends-->

<!--portfolio area starts-->
<?php if ( "on" == get_theme_mod( 'toggle_our_work', 'on' ) ) : ?>
<div id="portfolio" class="portfolio-area section-padding">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_work','Our Works' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_work_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="portfolio-content">
            <div class="port-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="port-nav-list">
                                <li><a class="img-filter active" data-filter="*">All</a></li>
                                <li><a class="img-filter" data-filter=".cut">Hair Cut</a></li>
                                <li><a class="img-filter" data-filter=".shave">Shaves</a></li>
                                <li><a class="img-filter" data-filter=".hstyle">Hair Style</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row port-items" id="img-filter">

                    <!-- OUR WORK DYNAMIC-->

                    <?php
        $portfolio_args = array(
        'post_type'     =>  'portfolio',
            
       /*NO OF POSTS ON PAGE*/
            
        'posts_per_page' => 6
        );
        
        $portfolio_posts = new WP_Query($portfolio_args);
        while($portfolio_posts->have_posts()) {
            $portfolio_posts->the_post();
?>
                    <!--POST-->
                    <div class="col-md-4 col-sm-6 col-xs-12 single-port <?php the_field('work_type'); ?>">
                        <div class="project-item">
                            <a href="<?php the_permalink() ?>" class="zoom1">
                                <!--edit image-->
                                <?php the_post_thumbnail('portfolio-thumb') ?>
                                <!--edit image-->
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <h4><?php the_title() ?></h4>
                                        <p>Classic Barber Shop</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php } ?>
                    <?php wp_reset_postdata() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- OUR WORK DYNAMIC END HERE-->

<!--portfolio area ends-->

<!--pricing area starts-->
<?php if ( "on" == get_theme_mod( 'toggle_our_pricing', 'on' ) ) : ?>
<div id="pricing" class="pricing-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_pricing','Our Pricing' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_pricing_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-pricing-box price-bg-1 xs-mb-30 sm-mb-30">
                    <h3>Hair Wash</h3>
                    <!--<h3 class="pricing-count">$15/mo</h3>-->
                    <div class="pricing-lists">
                        <ul>
                            <li><span class="pri">Hair Wash</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Wash</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Wash</span> <span class="daam">$12</span></li>
                        </ul>
                    </div>
                    <a href="#" class="bordered-btn">Appointment</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-pricing-box price-bg-2 xs-mb-30 sm-mb-30">
                    <h3>Hair Cutting</h3>
                    <!--<h3 class="pricing-count">$25/mo</h3>-->

                    <div class="pricing-lists">
                        <ul>
                            <li><span class="pri">Hair Cutting</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Cutting</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Cutting</span> <span class="daam">$12</span></li>
                        </ul>
                    </div>


                    <a href="#" class="bordered-btn">Appointment</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm">
                <div class="single-pricing-box price-bg-3 xs-mb-30">
                    <h3>Hair Trimming</h3>
                    <!--<h3 class="pricing-count">$35/mo</h3>-->

                    <div class="pricing-lists">
                        <ul>
                            <li><span class="pri">Hair Trimming</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Trimming</span> <span class="daam">$12</span></li>
                            <li><span class="pri">Hair Trimming</span> <span class="daam">$12</span></li>
                        </ul>
                    </div>
                    <a href="#" class="bordered-btn">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--pricing area ends-->

<!-- News area starts -->
<?php if ( "on" == get_theme_mod( 'toggle_our_blog', 'on' ) ) : ?>
<section id="blog" class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_blog','Our Blog' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_blog_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
        $blog_args = array(
        'post_type'     =>  'post',
        /*NO OF POSTS ON PAGE*/
        'posts_per_page' => 3
        );
        $x = 1;
        $blog_posts = new WP_Query($blog_args);
        while($blog_posts->have_posts()) {
            $blog_posts->the_post();
        ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="#blog-model-<?php echo $x; ?>" data-toggle="modal">
                            <?php the_post_thumbnail('homepage-thumb') ?>
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="#blog-model-<?php echo $x; ?>" data-toggle="modal">
                            <h3 class="subtitle"><?php the_title() ?></h3>
                        </a>

                        <?php the_excerpt() ?>
                        <a class="btn" href="#blog-model-<?php echo $x; ?>" data-toggle="modal">Read More</a>
                        <?php $x++; ?>
                    </div>
                </div>
            </div>

            <?php } ?>
            <?php wp_reset_postdata(); ?>

            <!--INTERNAL POST-->
            <?php
        $blog_in_args = array(
        'post_type'     =>  'post',
            
       /*NO OF POSTS ON PAGE*/
            
        //'post_per_page' => 3
        );
        $x = 1;
        $blog_in_posts = new WP_Query($blog_in_args);
        while($blog_in_posts->have_posts()) {
            $blog_in_posts->the_post();
        ?>
            <div class="news-modal modal fade" id="blog-model-<?php echo $x; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="close-1">
                            <div class="close-2">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <?php the_post_thumbnail( ) ?>
                                    <h2><?php the_title() ?></h2>
                                    <p class="blog-meta text-muted">
                                        <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user-circle-o"></i><?php echo get_the_author_meta('display_name') ?></a></span>
                                        <span><i class="fa fa-comment-o"></i><?php echo get_comments_number() ?> Comments</span>
                                    </p>
                                    <?php the_content(); ?>
                                    <?php $x++; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- News area ends -->

<!--testimonial Area Starts-->
<?php if ( "on" == get_theme_mod( 'toggle_testimonial', 'on' ) ) : ?>
<div id="testimonial" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_testimonial','Our Testimonials' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_testimonial_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel" id="testimonial-carousel">

                    <?php
        $testimonial_args = array(
        'post_type'     =>  'testimonial',
            
       /*NO OF POSTS ON PAGE*/
            
        'posts_per_page' => 5
        );
        $u = 1;
        $testimonial_posts = new WP_Query($testimonial_args);
        while($testimonial_posts->have_posts()) {
            $testimonial_posts->the_post();
    ?>

                    <div class="item border-t cu-p">
                        <div class="inner-box">
                            <p><?php the_field('clients_testimonial'); ?></p>
                            <h4><strong><?php the_field('client_name'); ?></strong></h4>
                            <!--change reviewer name-->
                            <h5>Customer <?php echo $u; ?></h5>
                        </div>
                    </div>
                    <?php $u++; ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--testimonial Area Ends-->

<!--Contact Area Starts-->
<?php if ( "on" == get_theme_mod( 'toggle_contact_us', 'on' ) ) : ?>
<div id="contact" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2><?php echo get_theme_mod( 'text_contact','Contact Us' ) ?></h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php echo get_theme_mod( 'text_contact_dec','Lorem ipsum dolor sit amet consectetur adipisicing elit' ) ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-contact-form">

                <form id="contact-form" method="post" action="contact.php">

                    <div class="messages"></div>
                    <!--you can change the message in contact.php file -->

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your full name *" required="required" data-error="Fullname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your Message *" rows="4" required="required" data-error="Leave a message for me"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-send" value="">Send message</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="opening-hours-wrap mt-30">
                    <h2>Opening Hours</h2>
                    <ul class="opening-hours">
                        <li>Monday<span class="pull-right">8.00 - 19.00</span></li>
                        <li>Tuesday <span class="pull-right">8.00 - 19.00</span></li>
                        <li>Wednesday <span class="pull-right">8.00 - 19.00</span></li>
                        <li>Thrusday <span class="pull-right">8.00 - 19.00</span></li>
                        <li>Friday <span class="pull-right">8.00 - 19.00</span></li>
                        <li>Saturday <span class="pull-right">8.00 - 19.00</span></li>
                        <li>Sunday <span class="pull-right">Closed</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>
<!--Contact Area Ends-->
<?php get_footer(); ?>
