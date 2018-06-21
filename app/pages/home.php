<section class="home">
	<div class="flex-center">
	  <div class="flex-item">
	    <div id="slide-home" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
						<?php echo $html->img('/img/slide-1.jpg'); ?>
	        </div>
	        <div class="item">
						<?php echo $html->img('/img/slide-2.jpg'); ?>
	        </div>
	        <div class="item">
						<?php echo $html->img('/img/slide-3.jpg'); ?>
	        </div>
	        <div class="item">
						<?php echo $html->img('/img/slide-4.jpg'); ?>
	        </div>
	      </div>
	    </div>
	    <h1>
				<?php echo $html->img('/img/text_logo.svg', ['alt', 'Brain Barreiro']); ?>
	      <span>design & visualization</span>
	    </h1>
	  </div>
	</div>
	</section>

	<section class="works">
	<div class="flex-grid works">
	  <div class="flex-items">
	    <div class="work-item">
				<?php echo $html->img('/img/projects-render.jpg'); ?>
	      <h2><?php echo $html->link('Architectonical', 'architectonical'); ?></h2>
	    </div>
	  </div>
	  <div class="flex-items">
	    <div class="work-item">
				<?php echo $html->img('/img/animation-render.jpg'); ?>
	      <h2><?php echo $html->link('Interior Design', 'interior-design'); ?></h2>
	    </div>
	  </div>
	  <div class="flex-items">
	    <div class="work-item">
				<?php echo $html->img('/img/retail-render.jpg'); ?>
	      <h2><?php echo $html->link('Office Design', 'office-design'); ?></h2>
	    </div>
	  </div>
	  <div class="flex-items">
	    <div class="work-item">
				<?php echo $html->img('/img/design-render.jpg'); ?>
	      <h2><?php echo $html->link('Retail Design', 'retail-design'); ?></h2>
	    </div>
	  </div>

	</div>
</section>