<?php 
    $paragraphs = explode('|',$article->contenu); 
    $article->dateSorti = date_create_from_format('Y-m-d H:i:s', $article->dateSorti)->format('d-m-Y H:i:s'); 
?>
<script type="text/javascript">
    var activeElement = document.getElementById('home');
    activeElement.className = "active";
    document.getElementById('navbar-text').innerHTML = "Article";
</script>
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-10">

					
						<!-- ARTICLE POST -->
						<article class="article article-post">
							<div class="article-main-img">
								<img src="<?php echo base_url() ?>images/articles/<?php echo $article->photos ?>" title="<?php echo str_replace(' ', '-', $article->titre) ?>" alt="<?php echo $article->titre ?>">
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="<?php echo base_url() ?>categorie/<?php echo str_replace(' ', '-', $article->categorie) ?>-<?php echo $article->categorieId ?>"><?php echo $article->categorie ?></a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h1 class="article-title"><?php echo $article->titre ?></h1>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i><?php echo $article->dateSorti ?></li>
								</ul>
								<h2 style="font-weight: lighter;font-size: medium;">
                                    <?php foreach ($paragraphs as $paragraph) { ?>
                                            <?php echo $paragraph ?>
                                        <br/>
                                        <br/>
                                    <?php } ?>
                                </h2>

							</div>
						</article>
						<!-- /ARTICLE POST -->
						
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
		<!-- /SECTION -->
		
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Actualités reliés</h2>
						</div>
						<!-- /section title -->
						
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							
								<!-- ARTICLE -->
								<?php foreach($articleRelies as $articleRelie){ ?>
								<div class="col-md-3 col-sm-6">
									<article class="article">
										<div class="article-img">
											<a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $articleRelie->titre) ?>-<?php echo $articleRelie->id ?>">
												<img src="<?php echo base_url() ?>images/articles/<?php echo $articleRelie->photos ?>" title="<?php echo str_replace(' ', '-', $articleRelie->titre) ?>" alt="<?php echo $articleRelie->titre ?>">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-file-text"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="#"><?php echo $articleRelie->titre ?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?php echo $articleRelie->dateSorti ?></li>
											</ul>
										</div>
									</article>
								</div>
								<?php } ?>
								<!-- /ARTICLE -->
							<!-- /Column 1 -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->