 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les matieres</h2>   
                <h5>Ajouter une matiere</h5>
            </div>
        </div>
        <hr/>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('matiere/Add');?>" method="post">
             <div class="form-group">
                <label for="mt_nom">Nom de la matiere</label>
                <input type="text" class="form-control" id="mt_nom" name="mt_nom" placeholder="Enter le nom">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="save" name="save">Ajouter</button>
              </div>
        </form>
    </div>
</div>