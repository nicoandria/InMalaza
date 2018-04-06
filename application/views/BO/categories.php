<?php if(isset($error)&&$error=1){ ?>
    <script type="text/javascript">
        alert("Nom categorie éxiste déja ou invalide");
    </script>
<?php } ?>
<script type="text/javascript">
    var activeElement = document.getElementById('categories');
    activeElement.className = "active";
    document.getElementById('navbar-text').innerHTML = "Categorie";
</script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content">
                        <div class="container">
                            <?php if(isset($categorieUpdate)){ ?>
                                <h4>Modification Categorie : <?php echo $categorieUpdate->nom ?></h4>
                                <form action="<?php echo base_url() ?>Admin/Categories/finalizeUpdate" method="post">
                            <?php }else{ ?>
                                <h4>Ajout Categorie</h4>
                                <form action="<?php echo base_url() ?>Admin/Categories/add" method="post">
                            <?php } ?>
                            
                            
                            
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <?php if(isset($categorieUpdate)){ ?>
                                            <input type="text" class="form-control border-input" placeholder="Polique,Divers,..." name = "nom" value="<?php echo $categorieUpdate->nom ?>" required="">
                                            <input type="hidden" name="id" value="<?php echo $categorieUpdate->id ?>">
                                        <?php }else{ ?>
                                            <input type="text" class="form-control border-input" placeholder="Polique,Divers,..." name = "nom" required="">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if(isset($categorieUpdate)){ ?>
                                            <input type="submit" class="btn btn-info btn-fill" value="Modifier">
                                        <?php }else{ ?>
                                            <input type="submit" class="btn btn-info btn-fill" value="Ajouter">
                                        <?php } ?>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <table class="table">
                                <thead>
                                    <th>Nom</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $categorie) { ?>
                                        <tr>
                                        <td><?php echo $categorie->nom ?></td>
                                        <td><a href="<?php echo base_url() ?>Admin/Categories/delete?id=<?php echo $categorie->id ?>">Supprimer  </a><a href="<?php echo base_url() ?>Admin/Categories/update?id=<?php echo $categorie->id ?>">Modifier </a></td>
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