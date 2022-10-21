<?php 
/**
 * 链接
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); ?>

		<!-- article -->
			<article class="container box style3">

					<div class="links"><?php $this->content(); ?></div>
              <hr /> <p align="right"> 访问：<?php get_post_view($this) ?>次</p>
					</article>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>