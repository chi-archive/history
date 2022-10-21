	<section id="footer">
      
                    
      <ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy;<?php echo date('Y'); ?>.<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>All rights reserved.</li><li>Theme by <a href="http://1000yun.cn">overflow</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->

  <script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('assets/js/aos.js'); ?>"></script> 

<script>
AOS.init({
  offset: 200,
  duration: 600,
  easing: 'ease-in-sine',
  delay: 100,
});
  </script>

	</body>
</html>