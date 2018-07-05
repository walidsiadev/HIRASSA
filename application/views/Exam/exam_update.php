<?php if($exam) :?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Examens & Planification</h2>   
                <h5>Modifier un Examan</h5>
            </div>
        </div>
        <hr/>
        <?php foreach($exam as $exm) :?>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
            <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Examen/Update/'.$exm->ex_id);?>" method="post">
              <div class="form-group">
                <label for="mt_id">La matière</label>
                <select class="form-control" id="mt_id" name="mt_id">
                    <?php if($matier) :?>
                    <?php foreach($matier->result() as $mat):?>
                    <option <?php if($mat->mt_id == $exm->mt_id) :?> selected <?php endif;?> value="<?php echo $mat->mt_id; ?>"><?php echo $mat->mt_nom; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="ex_niv">Niveau Scolaire</label>
                <select class="form-control" id="ex_niv" name="ex_niv">
                  <option <?php if($exm->ex_niv == "2-BAC") :?> selected <?php endif;?> value="2-BAC">2-BAC</option>
                  <option <?php if($exm->ex_niv == "1-BAC") :?> selected <?php endif;?> value="1-BAC">1-BAC</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ex_date">Date</label>
                <input value="<?php echo $exm->ex_date; ?>" type="Date" class="form-control" id="ex_date" name="ex_date" placeholder="Enter la Date">
              </div>
              <div class="form-group">
                <label for="ex_dure">La durée</label>
                <input value="<?php echo $exm->ex_dure; ?>" type="number" step="0.1" class="form-control" id="ex_dure" name="ex_dure" placeholder="Enter la durée">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Update" name="Update">Modifier</button>
              </div>
            </form>
            <?php endforeach;?>
    </div>
</div>
<?php endif ;?>