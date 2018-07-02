 <?php if($matiere) :?>
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les matieres</h2>   
                <h5>Modifier une matiere</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($matiere as $mat) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('matiere/Update/'. $mat->mt_id);?>" method="post">
             <div class="form-group">
                <label for="mt_nom">Nom de la ville</label>
                <input value="<?php echo $mat->mt_nom?>" type="text" class="form-control" id="mt_nom" name="mt_nom" placeholder="Enter le nom">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Update" name="Update">Modifier</button>
              </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<?php endif ;?>