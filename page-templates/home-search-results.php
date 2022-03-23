<?php



function cpt_query_results()
{
    if ($_GET['search_text'] && !empty($_GET['search_text'])) {
        $text = $_GET['search_text'];
    }

    $args = array(
        'post_type' => 'job_listing',
        'posts_per_page' => -1,
        's' => $text

    );

    $resultsQuery = new WP_Query($args);


    while ($resultsQuery->have_posts()) {
        $resultsQuery->the_post(); ?>




        <div class="container">
            <div class="col-sm-12">

                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">

                        <div class="col-md-5 cta-contents">
                            <img class="w-100 h-100" src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/08/c573bf41-6a7c-4927-845c-4ca0260aad6b-1520x800.jpeg" alt="">
                        </div>

                        <div class="col-md-5 cta-contents">
                            <h1 class="cta-title"><?php echo the_title(); ?></h1>
                            <div class="cta-desc">
                                <p><?php echo the_content(); ?></p>
                                <br>
                            </div>

                            <div class="cta-desc">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="p-1"> 602 Reviews </span>
                                </div>
                                <div class="mt-5">
                                    <ul class="social-network social-circle">
                                        <li><a href="#" class="icoRss"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" class="icoFacebook"><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#" class="icoTwitter"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#" class="icoGoogle"><i class="fa fa-save"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-primary">Check This</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
    }
}





add_shortcode('cpt_results', 'cpt_query_results');
