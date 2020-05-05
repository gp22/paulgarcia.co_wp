<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
		$sections = carbon_get_the_post_meta( 'crb_sections' );
		?>

		<?php
		foreach ( $sections as $section ) {
        switch ( $section['_type'] ) {
						case 'hero':
							?>

							<section class="hero">
								<div class="container mx-auto px-6 py-16 flex flex-col items-center justify-between  lg:flex-row lg:pt-32">
									<div class="max-w-lg">
										<h1 class="font-bold font-display mb-2 text-2xl text-white  lg:leading-snug lg:text-5xl xl:text-6xl">

											<?php echo esc_html( $section['hero_heading'] ); ?>

										</h1>
										<h2 class="text-white opacity-75 mb-10  lg:mb-0">

											<?php echo esc_html( $section['hero_subhead'] ); ?>

										</h2>
									</div>

									<?php
									$image_attributes = wp_get_attachment_image_src( $section['hero_image'], array( 120, 120 ) );
									if ( $image_attributes ) : ?>

											<img
												src="<?php echo $image_attributes[0]; ?>"
												width="<?php echo $image_attributes[1]; ?>"
												height="<?php echo $image_attributes[2]; ?>"
												class="rounded-full mx-auto z-10 shadow-lg  lg:mx-0"
											/>

									<?php endif; ?>
								</div>

								<svg viewBox="0 0 1366 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero"> <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path> <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path> <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path> </g> <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero"> <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path> </g> </g> </svg>
							</section>

							<?php
						break;

            case 'blockquote':
                ?>

								<div class="container mx-auto pt-6 px-6">

										<blockquote class="bg-blue-100 border-2 border-blue-500 py-5 px-6 mb-4 max-w-xl relative">
												<svg width="26.807" height="23.456" viewBox="0 0 26.807 23.456" class="absolute  quote-left"><path d="M24.294 43.728h-4.188v-3.351a3.354 3.354 0 013.351-3.351h.419a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 0023.875 32h-.419a8.375 8.375 0 00-8.377 8.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515zm-15.079 0H5.026v-3.351a3.354 3.354 0 013.351-3.351H8.8a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 008.8 32h-.423A8.375 8.375 0 000 40.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515z" transform="translate(0 -32)" fill="#e6f0ff"></path></svg>
												<p class="text-blue-600 mb-3 relative"><?php echo $section['quote_text']; ?></p>
												<cite class="text-blue-400 font-light">— <?php echo $section['quote_attr']; ?></cite>
										</blockquote>

								</div>

                <?php
						break;

            case 'feature_list':
                ?>

								<section class="container mx-auto pt-6 px-6">
									<h4 class="italic">What you'll get</h4>

									<ul class="md:flex md:flex-wrap md:mx-neg">

										<?php foreach ( $section['features'] as $feature ) : ?>

											<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
												<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
													<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"></span>
													<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">
														<?php echo $feature['feature_title']; ?>
													</h5>
												</div>
												<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">
													<?php echo $feature['feature_body']; ?>
												</p>
											</li>

										<?php endforeach; ?>

									</ul>

								</section>

                <?php
						break;

            case 'file_list':
                ?>
                <div class="section-file-list">
                    <h2>Resorces:</h2>
                    <ul>
                        <?php foreach ( $section['files'] as $file_item ) : ?>
                            <li>
                                <a href="<?php echo wp_get_attachment_url( $file_item['file'] ); ?>" target="_blank"><?php echo get_the_title( $file_item['file'] ); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php
						break;

            case 'related_posts':
                ?>
                <div class="section-related-posts">
                    <h2>Related posts:</h2>
                    <ul>
                        <?php foreach ( $section['posts'] as $post_item ) : ?>
                            <li>
                                <a href="<?php echo get_the_permalink( $post_item['id'] ); ?>"><?php echo get_the_title( $post_item['id'] ); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php
						break;
        }
    }
    ?>
<?php endwhile; ?>

<!-- <pre>
	<?php echo var_export( $sections ); ?>
</pre> -->

<?php get_footer(); ?>
