<?php get_header(); ?>

    <div class="row">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="col-sm-12">

                <?php get_template_part( 'content', 'single' ); ?>

            </article>

        <?php endwhile; ?>
        
    </div>

<!-- 
                <article class="col-sm-12 post">
                    
                    <h2>My personal portfolio</h2>

                    <div class="divider divider-single"></div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quisquam, quas excepturi eum enim error. Molestias eveniet fugit accusantium velit? Neque, quos odio eos itaque harum cupiditate? Debitis, eos, tempore....</p>

                    <div class="post-info">   

                        <span class="post-time">
                            <i class="fa fa-clock-o icon"></i>
                            <time  datetime="2013-11-18 11:52"> 18 de Novembro de 2013</time>
                        </span>

                        <span class="post-tags">
                            <i class="fa fa-tag icon"></i>
                            <a href="#">Acessibilidade</a>,
                            <a href="#">Wordpress</a>
                        </span>

                    </div>

                </article>

                <article class="col-sm-12 post">
                    
                    <a href="#" class="post-title"><h2>My personal portfolio</h2></a>

                    <div class="divider divider-single"></div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quisquam, quas excepturi eum enim error. Molestias eveniet fugit accusantium velit? Neque, quos odio eos itaque harum cupiditate? Debitis, eos, tempore....</p>

                    <div class="post-info">   

                        <span class="post-time">
                            <i class="fa fa-clock-o icon"></i>
                            <time  datetime="2013-11-18 11:52"> 18 de Novembro de 2013</time>
                        </span>

                        <span class="post-tags">
                            <i class="fa fa-tag icon"></i>
                            <a href="#">Acessibilidade</a>,
                            <a href="#">Wordpress</a>
                        </span>

                    </div>

                </article>

                <div class="col-sm-4">
                    <div class="media-box">

                        <div class="media-thumbnail">

                            <div class="fadder-box">
                                <div class="fadder-image">
                                    <a href="#">
                                        <img src="img/photos/jesus-loves.jpg" alt="Jesus Loves">
                                        <div class="fadder-background"></div>
                                        <div class="fadder-ico"></div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="media-title">Title example</a>

                        <div class="media-info">

                            <i class="fa fa-tag icon"></i>
                            <a href="#">Category name</a>

                        </div>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="media-box">

                        <div class="media-thumbnail">

                            <div class="fadder-box">
                                <div class="fadder-image">
                                    <a href="#">
                                        <img src="img/photos/jesus-loves.jpg" alt="Jesus Loves">
                                        <div class="fadder-background"></div>
                                        <div class="fadder-ico"></div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="media-title">Title example</a>

                        <div class="media-info">

                            <i class="fa fa-tag icon"></i>
                            <a href="#">Category name</a>

                        </div>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="media-box">

                        <div class="media-thumbnail">

                            <div class="fadder-box">
                                <div class="fadder-image">
                                    <a href="#">
                                        <img src="img/photos/jesus-loves.jpg" alt="Jesus Loves">
                                        <div class="fadder-background"></div>
                                        <div class="fadder-ico"></div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="media-title">Title example</a>

                        <div class="media-info">

                            <i class="fa fa-tag icon"></i>
                            <a href="#">Category name</a>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="media-box">

                        <div class="media-thumbnail">

                            <div class="fadder-box">
                                <div class="fadder-image">
                                    <a href="#">
                                        <img src="img/photos/jesus-loves.jpg" alt="Jesus Loves">
                                        <div class="fadder-background"></div>
                                        <div class="fadder-ico"></div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="media-title">Title example</a>

                        <div class="media-info">

                            <i class="fa fa-tag icon"></i>
                            <a href="#">Category name</a>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="media-box">

                        <div class="media-thumbnail">

                            <div class="fadder-box">
                                <div class="fadder-image">
                                    <a href="#">
                                        <img src="img/photos/jesus-loves.jpg" alt="Jesus Loves">
                                        <div class="fadder-background"></div>
                                        <div class="fadder-ico"></div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="media-title">Title example</a>

                        <div class="media-info">

                            <i class="fa fa-tag icon"></i>
                            <a href="#">Category name</a>

                        </div>

                    </div>
                </div>

                <div class="col-sm-12">
                
                    <div class="loading"><i class="fa fa-spinner fa-spin icon"></i> Loading more posts...</div>

                </div> -->

<?php get_footer(); ?>