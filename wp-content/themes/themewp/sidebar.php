<div class="col-left">
						<div id="brand">
							<h3>shop the brand</h3>
							<select name="">
								<option value="0"> Choose..</option>
								<option value="1"> A</option>
								<option value="2"> B</option>

							</select>
						</div>
						<div id="category">
							<a href=""><h3>shop by category</h3></a>
							<nav id="menu_left">
								<ul>
								<?php 
								// show cat
                                 $args = array(
								    'type'      => 'post',
								    'child_of'  => 0,
								    'parent'    => ''
								);
                                $cats=get_categories( $args);
                                foreach ( $cats as $value) {
								 ?>
									<li><a href="<?php echo esc_url(get_category_link($value->term_id ) ); ?>" title=""><?php echo $value->name; ?></a></li>
									<?php } ?>
									

								</ul>
							</nav>
						</div>
					</div>