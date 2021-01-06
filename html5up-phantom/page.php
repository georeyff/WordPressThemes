page
<?php get_header(); ?>
				<!-- Main -->
                <!-- <div id="main"> -->
						<div class="inner">
							<!-- <header>
								<h1>This is Phantom, a free, fully responsive site<br />
								template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header> -->
							<section>
								<?php while(have_posts()){
                                    the_post(); ?>
                                    <article class="style1">
											<span class="image">
												<?php the_post_thumbnail() ?>
											</span>
											<a href="generic.html">
												<h2><?php the_title(); ?></h2>
												<div class="content">
													<p><?php the_content(); ?></p>
												</div>
											</a>
									</article>
                                <?php } ?>
											
								
							</section>
						</div>
					</div>

<?php get_footer(); ?>