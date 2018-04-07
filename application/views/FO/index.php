
		<script type="text/javascript">
            var activeElement = document.getElementById('<?php if(isset($categorieChoisi)){ echo $categorieChoisi->nom;}else{echo "home";} ?>');
            activeElement.className = "active";
        </script>
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			
            <!-- ARTICLE -->
			<?php foreach($alaunes as $alaune){ 
                $alaune->dateSorti = date_create_from_format('Y-m-d H:i:s', $alaune->dateSorti)->format('d-m-Y H:i:s'); 
            ?>
            
            <article class="article thumb-article">
            	<a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $alaune->titre) ?>-<?php echo $alaune->id ?>">
					<div class="article-img">
						<img src="<?php echo base_url() ?>/images/alaune/<?php echo $alaune->photo ?>" title="<?php echo str_replace(' ', '-', $alaune->titre) ?>" alt="<?php echo $alaune->titre ?>">
					</div>
				</a>

				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="<?php echo base_url() ?>categorie/<?php echo str_replace(' ', '-', $alaune->categorie) ?>-<?php echo $alaune->categorieId ?>"><?php echo $alaune->categorie ?></a></li>
						<li class="article-type"><i class="fa fa-file-text"></i></li>
					</ul>
					<h1 class="article-title" style="font-size: medium;"><a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $alaune->titre) ?>-<?php echo $alaune->id ?>"><?php echo $alaune->titre ?></a></h1>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> <?php echo $alaune->dateSorti ?></li>
					</ul>
				</div>
			</article>
            <?php } ?>
			<!-- /ARTICLE -->
			
		</div>
		<!-- /Owl Carousel 1 -->
		<div class="section">
            <!-- CONTAINER -->
            <div class="container">
                <!-- ROW -->
                <div class="row">
                    <!-- Main Column -->
                    <div class="col-md-10">
                        <!-- section title -->
                        <div class="section-title">
                            <h3 class="title">Actualités</h3>
                        </div>
                        <?php foreach($articles as $article){ 
                            $article->dateSorti = date_create_from_format('Y-m-d H:i:s', $article->dateSorti)->format('d-m-Y H:i:s'); 
                        ?>                        
                            <article class="article row-article">
                                <div class="article-img">
                                    <a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $article->titre) ?>-<?php echo $article->id ?>">
                                        <img src="<?php echo base_url() ?>images/articles/<?php echo $article->photos ?>" title="<?php echo str_replace(' ', '-', $article->titre) ?>" alt="<?php echo $article->titre ?>">
                                    </a>
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category"><a href="<?php echo base_url() ?>categorie/<?php echo str_replace(' ', '-', $article->categorie) ?>-<?php echo $article->categorieId ?>"><?php echo $article->categorie ?></a></li>
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                    <h3 class="article-title"><a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $article->titre) ?>-<?php echo $article->id ?>"><?php echo $article->titre ?></a></h3>
                                    <ul class="article-meta">
                                        <li style="color:black"><i class="fa fa-clock-o"></i><?php echo $article->dateSorti ?></li>
                                    </ul>
                                    <p><?php echo $article->resumes ?></p>
                                </div>
                            </article>
                            <?php } ?>
                    </div>
                    <!-- /Main Column -->
                    
                    <!-- Aside Column -->
                    <div class="col-md-2">
                    </div>
                    <!-- /Aside Column -->
                </div>
                <!-- /ROW -->
            </div>
            <!-- /CONTAINER -->
        </div>
		