 <?php if($ecole) :?>
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>L'École</h2>   
                <h5>Modifier une École</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($ecole as $ecol) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Ecole/Update/'.$ecol->eco_id);?>" method="post">
        <div class="form-group">
                <label for="prof_email">Nom de l'écoel</label>
                <input value="<?php echo $ecol->eco_nom ?>" type="text" class="form-control" id="eco_nom" name="eco_nom" placeholder="Enter Nom">
              </div>
              <div class="form-group">
                <label for="v_id">La ville</label>
                <select class="form-control" id="v_id" name="v_id">
                    <?php if($ville) :?>
                    <?php foreach($ville->result() as $vil):?>
                    <option <?php if($vil->v_id == $ecol->v_id) :?> selected <?php endif;?> value="<?php echo $vil->v_id; ?>"><?php echo $vil->v_nom; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="prfct_id">La prefécture</label>
                <select class="form-control" id="prfct_id" name="prfct_id">
                    <?php if($pref) :?>
                    <?php foreach($pref->result() as $prefe):?>
                    <option <?php if($prefe->prfct_id == $ecol->prfct_id) :?> selected <?php endif;?> value="<?php echo $prefe->prfct_id; ?>"><?php echo $prefe->prfct_nom; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Update" name="Update">Modifier</button>
              </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<?php endif ;?>