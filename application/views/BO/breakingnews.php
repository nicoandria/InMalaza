<script type="text/javascript">
    var activeElement = document.getElementById('breakingnews');
    activeElement.className = "active";
    document.getElementById('navbar-text').innerHTML = "Breaking News";
</script>
<?php if(isset($_GET['error'])){ ?>
    <script type="text/javascript">alert("Le Titre est déjà assigner à une description")</script>
<?php } ?>

<style type="text/css">
    .modal-backdrop{
        position: inherit;
    }
</style>
<div class="modal fade" id="breakingNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Breaking News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url() ?>Admin/BreakingNews/add" enctype="multipart/form-data">
            <div class="form-group">
                <label>Article</label>
                <select name="article" class="form-control border-input" required="">
                    <?php foreach($articles as $article){ ?>
                        <option value="<?php echo $article->id ?>"><?php echo $article->titre ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" required="" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success btn-fill" value="Ajouter" />
      </div>
      </form>
    </div>
  </div>
</div>



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content">
                        <div class="container">
                            <div class="col-md-10">
                            <a href="#" class="btn btn-info btn-fill" data-toggle="modal" data-target="#breakingNewsModal">Ajouter Alaune</a>
                                <table class="table">
                                    <thead>
                                        <th>Article</th>
                                        <th>Description</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($breakingnews as $breakingnew){ ?>
                                        <tr>
                                            <td><?php echo $breakingnew->titre ?></td>
                                            <td><?php echo $breakingnew->description; ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>Admin/BreakingNews/delete?id=<?php echo $breakingnew->id ?>">Supprimer</a>
                                            </td>
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