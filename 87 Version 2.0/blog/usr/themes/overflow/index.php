<?php
/**
 * overflow for Typecho
 * 
 * @package overflow
 * @author 雨落泪尽
 * @version 1.0
 * @link http://1000yun.cn
 */
 
 $this->need('header.php');
 ?>
 
<!-- Banner -->
			<div id="banner">
              <header fade-up>
              <h2>闲人怎知，忙人有多想闲人</h2>
              </header>
             <p aos="fade-up" aos-once="true">有很多话想跟你说，但一直没有机会。</br>我携带它们穿越季节，掠过高架，铺在山与海之间。</br>盛开就是一句，夜漫过就是一篇。</br>黄昏开始书写，黎明是无数的扉页。</br>全世界拼成诗，我爱你当作最后一行。</p>
			</div>
            
<!-- Feature -->

<?php while($this->next()): ?>
			<div class="container box style1 right">
				<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
                <?php else: ?>
                <?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
                <?php else: ?>
              <a href="<?php $this->permalink() ?>" class="image fit"> <img src="<?php showThumbnail($this); ?>" alt="<?php $this->title() ?>"  aos="fade-down" aos-offset="0" aos-once="true"> </a>
                <?php endif; ?>
                <?php endif; ?>
				<div class="inner">
					<header>
						<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					</header>
					<p><?php $this->excerpt(); ?></p>
                    <?php $this->date('Y-n-j H:i'); ?>        
				</div>
			</div>
<?php endwhile; ?>
        <ol class="page-navigator"><li class="current"><?php $this->pageNav(); ?></li></ol>  

<?php $this->need('footer.php'); ?>