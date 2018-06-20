 <?php if($prefect) :?>
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les prefectures</h2>   
                <h5>Modifier une prefecture</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($prefect as $pref) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Prefect/Update/'.$pref->prfct_id);?>" method="post">
             <div class="form-group">
                <label for="prfct_nom">Nom de la Prefecture</label>
                <input value="<?php echo $pref->prfct_nom?>" type="text" class="form-control" id="prfct_nom" name="prfct_nom" placeholder="Enter le nom">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Update" name="Update">Modifier</button>
              </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<?php endif ;?>