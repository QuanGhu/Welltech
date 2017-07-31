
<section id="content-our-business">
    <div class="text-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <?php
                    $category = get_the_category();
                    $firstCategory = $category[0]->cat_ID;
                    if ($firstCategory == 9 || $firstCategory == 10 || $firstCategory == 11) {
                      echo '<a class="back" href="http://wt.shrimpventures.com/completed-projects/">Back</a>';

                    } elseif ($firstCategory == 13 || $firstCategory == 12 || $firstCategory == 15) {
                      echo '<a class="back" href="http://wt.shrimpventures.com/current-projects/">Back</a>';

                    }
                    ?>

                    <div class="pagination">
                        <ul class="pager">
                          <li><?php previous_post_link('%link', 'Previous', TRUE); ?></li>
                          <li>|</li>
                          <li><?php next_post_link('%link', 'Next', TRUE);  ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if ( has_post_thumbnail() ) { echo '<img src="'.get_the_post_thumbnail_url().'" class="img-responsive"/>';} ?>
        </div>
        <div class="container">
            <div class="view-project-box">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="title">
                            <h3><?php the_title(); ?></h3>
                        </div> -->
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
