<?php get_header();?>
		<main id="main">
		<?php while(have_posts()): the_post(); ?>	
			<?php get_template_part( 'template-parts/content', get_post_format());?>

			<div class="navigation">
				<div class="previous">
					<?php if(get_previous_post_link()): ?>
						<span><?php e_('Entrada anterior','apollosegundo'); ?></span>
						<?php previous_post_link(); ?>
						<?php else: ?>
							<span><?php e_('No hay entradas recientes', 'apollosegundo'); ?></span>
							<a href="<?php bloginfo('url'); ?>"><?php _e('Vuelva al blog','apollosegundo'); ?></a>
						<?php endif; ?>

				</div>
				
				<div class="next">
					<?php if(get_next_post_link()): ?>
						<span><?php e_('Entrada anterior','apollosegundo'); ?></span>
						<?php next_post_link(); ?>
						<?php else: ?>
							<span><?php e_('No hay entradas anteriores','apollosegundo'); ?></span>
							<a href="<?php bloginfo('url'); ?>"><?php _e('Vuelva al blog','apollosegundo'); ?></a>
						<?php endif; ?>
				</div>
			</div><!-- .navigation -->

			<section id="comments" class="comments">
				
				<div class="comments-number">
					<h2>3 comentarios</h2>
				</div><!-- .comments-number -->
				
				<ol class="comments-list">
					<li>
						<article class="comment">
							<div class="comment-author">
								<img src="assets/img/user-comment.png" alt="Nombre del autor">
								<span class="author-name"><a href="">Nombre del autor</a></span>
							</div><!-- .comment-author -->
							<div class="comment-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate at repudiandae mollitia accusantium! Ipsam omnis laboriosam debitis, maxime, provident voluptatum vero harum sed doloremque reiciendis necessitatibus quos sapiente ipsum!</p>
							</div><!-- .comment-content -->
							<div class="comment-footer">
								<span class="comment-date">agosto 21, 2016</span>
								<a href="" class="comment-reply-link">Responder</a>
							</div><!-- .comment-footer -->
						</article><!-- .comment -->
						
						<ul>
							<li>
								<article class="comment">
									<div class="comment-author">
										<img src="assets/img/user-comment.png" alt="Nombre del autor">
										<span class="author-name">Nombre del autor</span>
									</div><!-- .comment-author -->
									<div class="comment-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate at repudiandae mollitia accusantium! Ipsam omnis laboriosam debitis, maxime, provident voluptatum vero harum sed doloremque reiciendis necessitatibus quos sapiente ipsum!</p>
									</div><!-- .comment-content -->
									<div class="comment-footer">
										<span class="comment-date">agosto 21, 2016</span>
										<a href="" class="comment-reply-link">Responder</a>
									</div><!-- .comment-footer -->
								</article><!-- .comment -->

								<ul>
									<li>
										<article class="comment">
											<div class="comment-author">
												<img src="assets/img/user-comment.png" alt="Nombre del autor">
												<span class="author-name">Nombre del autor</span>
											</div><!-- .comment-author -->
											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate at repudiandae mollitia accusantium! Ipsam omnis laboriosam debitis, maxime, provident voluptatum vero harum sed doloremque reiciendis necessitatibus quos sapiente ipsum!</p>
											</div><!-- .comment-content -->
											<div class="comment-footer">
												<span class="comment-date">agosto 21, 2016</span>
												<a href="" class="comment-reply-link">Responder</a>
											</div><!-- .comment-footer -->
										</article><!-- .comment -->
									</li>
								</ul>

							</li>
						</ul>

					</li>
					<li>
						<article class="comment">
							<div class="comment-author">
								<img src="assets/img/user-comment.png" alt="Nombre del autor">
								<span class="author-name">Nombre del autor</span>
							</div><!-- .comment-author -->
							<div class="comment-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate at repudiandae mollitia accusantium! Ipsam omnis laboriosam debitis, maxime, provident voluptatum vero harum sed doloremque reiciendis necessitatibus quos sapiente ipsum!</p>
							</div><!-- .comment-content -->
							<div class="comment-footer">
								<span class="comment-date">agosto 21, 2016</span>
								<a href="" class="comment-reply-link">Responder</a>
							</div><!-- .comment-footer -->
						</article><!-- .comment -->					
					</li>

				</ol><!-- .comments-list -->

				<div id="respond">
					<h3>Deja un comentario <small><a href="">Cancelar respuesta</a></small></h3>
					<form>
						<p>Tu dirección de correo no será publicada. Los campos obligatorios están marcados con *</p>
						<p>
							<label for="">Comentario</label>
							<textarea cols="45" rows="8"></textarea>
						</p>
						<p>
							<label for="">Nombre *</label>
							<input type="text" size="30">
						</p>
						<p>
							<label for="">Email *</label>
							<input type="email" size="30">
						</p>
						<p>
							<label for="">Sitio web</label>
							<input type="url" size="30">
						</p>
						<p>
							<input type="submit" value="Publicar comentario">
						</p>
					</form>
				</div><!-- #respond -->

			</section><!-- #comments -->
<?php endwhile; ?>
		</main><!-- #main -->

		<?php get_sidebar();?>
		<?php get_footer();?>
	
