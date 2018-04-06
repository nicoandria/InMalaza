<?php 
    $paragraphs = explode('|',$article->contenu); 
    $article->dateSorti = date_create_from_format('Y-m-d H:i:s', $article->dateSorti); 
?>
<script type="text/javascript">
    var activeElement = document.getElementById('articles');
    activeElement.className = "active";
    document.getElementById('navbar-text').innerHTML = "Article";
</script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Detail <?php echo $article->titre ?></h4>
                    </div>
                    <div class="content">
                        
                        <div class="container">
                            <div class="col-md-10">
                                <div class="row">
                                    <h5><img src="<?php echo base_url() ?>/images/articles/<?php echo $article->photos ?>" /></h5>
                                </div>
                                <div class="row">
                                    <h3>Titre : <small><?php echo $article->titre ?></small></h3>
                                </div>
                                <div class="row">
                                    <h5>Categorie : <small><?php echo $article->categorie ?></small></h5>
                                </div>
                                <div class="row">
                                    <h5>Date : <small><?php echo $article->dateSorti->format('d-m-Y H:i:s') ?></small></h5>
                                </div>
                                <div class="row">
                                    <h5>Contenu : <br><small>
                                        <?php foreach ($paragraphs as $paragraph) { ?>
                                                <?php echo $paragraph ?>
                                            <br/>
                                            <br/>
                                        <?php } ?>
                                    </small></h5>
                                </div>
                                <div class="row">
                                    <h5>Résumé : <small><?php echo $article->resumes ?></small></h5>
                                </div>
                                <div class="row">
                                    <h5>Url : <small><?php echo $article->articleUrl ?></small></h5>
                                </div>
                                <div class="row" style="text-align: center">
                                    <a href="<?php echo base_url() ?>Admin/Articles/updateUi?id=<?php echo $article->id ?>" class="btn btn-info btn-fill">Modifier</a>
                                    <a href="<?php echo base_url() ?>Admin/Articles/delete?id=<?php echo $article->id ?>" class="btn btn-danger btn-fill">Supprimer</a>
                                </div>
                                <br>
                                <br>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>