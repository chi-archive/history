<?php $this->need('header.php'); ?>
		<!-- article -->
			<article class="container box style3">
				<header>
					<h2><?php $this->title() ?></h2>
							</header>	
              <section><div class="gallery"><?php $this->content(); ?></div></section>
              <hr /> <p align="right"> 访问：<?php get_post_view($this) ?>次</p>
	</article>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>