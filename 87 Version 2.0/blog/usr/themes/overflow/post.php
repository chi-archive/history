<?php $this->need('header.php'); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/prism.css'); ?>"/>
		<!-- article -->
			<article class="container box style3" >
				<header aos="fade-down" aos-once="true">
					<h2><?php $this->title() ?></h2>
							</header>
              <div class="entry-content">
					<section aos="fade-up" aos-once="true"><?php $this->content(); ?></section>
                <hr />
                <hr /> <p align="right"> 访问：<?php get_post_view($this) ?>次</p>
              </div>
        
	</article>
<script src="<?php $this->options->themeUrl('assets/js/prism.js'); ?>"></script>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
  