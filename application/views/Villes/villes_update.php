 <?php if($ville) :?>
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les villes</h2>   
                <h5>Modifier une ville</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($ville as $vel) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('ville/Update/'.$vel->v_id);?>" method="post">
             <div class="form-group">
                <label for="v_nom">Nom de la Prefecture</label>
                <input value="<?php echo $vel->v_nom?>" type="text" class="form-control" id="v_nom" name="v_nom" placeholder="Enter le nom">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Update" name="Update">Modifier</button>
              </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<?php endif ;?>