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
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <a href="<?php echo base_url() ?>Admin/Articles/addUi" class="btn btn-success btn-fill">Ajouter Article</a>
                            </div>
                            <div class="row col-md-10">
                                <table class="table">
                                    <thead>
                                        <th>Photo</th>
                                        <th>Titre</th>
                                        <th>Categorie</th>
                                        <th>Date</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($articles as $article){  $article->dateSorti = date_create_from_format('Y-m-d H:i:s', $article->dateSorti);?>
                                            <tr>
                                                <td><a href="<?php echo base_url() ?>Admin/Articles/detail?id=<?php echo $article->id ?>"><img height="50%" src="<?php echo base_url() ?>images/articles/<?php echo $article->photos ?>" /></a></td>
                                                <td><a href="<?php echo base_url() ?>Admin/Articles/detail?id=<?php echo $article->id ?>"><?php echo $article->titre ?></a></td>
                                                <td><?php echo $article->categorie ?></td>
                                                <td><?php echo $article->dateSorti->format('d-m-Y H:i:s')  ?></td>
                                                <td><a href="<?php echo base_url() ?>Admin/Articles/updateUi?id=<?php echo $article->id ?>">Modifier</a>
                                    <a href="<?php echo base_url() ?>Admin/Articles/delete?id=<?php echo $article->id ?>">Supprimer</a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>