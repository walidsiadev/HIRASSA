 <?php if($salles) :?>
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Salles</h2>   
                <h5>Modifier une Salle</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($salles as $sal) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Salle/Update/'.$sal->sal_id);?>" method="post">
            <div class="form-group">
                <label for="sal_num">Numération de la Salle</label>
                <input value="<?php echo $sal->sal_num ?>" type="text" class="form-control" id="sal_num" name="sal_num" placeholder="Enter la Numération de la Salle">
            </div>
            <div class="form-group">
                <label for="sal_cap">Capacité</label>
                <input value="<?php echo $sal->sal_cap ?>" type="number" class="form-control" id="sal_cap" name="sal_cap" placeholder="Enter la Capacité">
            </div>
            <div class="form-group">
                <label for="eco_id">Ecole</label>
                <select class="form-control" id="eco_id" name="eco_id">
                    <?php if($ecole) :?>
                    <?php foreach($ecole->result() as $eco):?>
                    <option <?php if($eco->eco_id == $sal->eco_id) :?> selected <?php endif;?> value="<?php echo $eco->eco_id; ?>"><?php echo $eco->eco_nom; ?></option>
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