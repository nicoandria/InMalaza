<?php if(isset($error)&&$error=1){ ?>
    <script type="text/javascript">
        alert("Un probleme est survenue lors de l'upload du photo <?php echo $error ?>");
    </script>
<?php } ?>
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
                        <div style="text-align: center;">
                            <h4>Ajout Article</h4>
                            <form action="<?php echo base_url() ?>Admin/Articles/add" method="POST" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Titre</label>
                                        <input type="text" class="form-control border-input" placeholder="Titre" name = "titre" required="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Categorie</label>
                                        <select class="form-control border-input" name="categorie">
                                            <?php foreach($categories as $categorie){ ?>
                                                <option value="<?php echo $categorie->id ?>"><?php echo $categorie->nom ?></option> 
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Photo (Taille Maximum : 3MB | 400 x 200 (px))</label>
                                        <input class="form-control border-input" type="file" name="photo" size="20" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Contenu <small>(Pour séparer paragraphes utilisez | (Alt Gr + 6))</small></label>
                                        <br>
                                        <textarea  class="form-control border-input" name="contenu" rows="6" required="" placeholder="Paragraphe1 | Paragraphe2 | Paragraphe3 ...."></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Résumé</label>
                                        <input type="text" class="form-control border-input" placeholder="Résumé" name = "resumes">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Texte URL</label>
                                        <input type="text" class="form-control border-input" placeholder="paques-2018-calme" name = "articleUrl">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-fill" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>