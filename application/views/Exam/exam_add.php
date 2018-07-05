 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Examens & Planification</h2>   
                <h5>Ajouter une Salle</h5>
            </div>
        </div>
        <hr/>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Examen/Add');?>" method="post">
              <div class="form-group">
                <label for="mt_id">La matière</label>
                <select class="form-control" id="mt_id" name="mt_id">
                    <?php if($matier) :?>
                    <?php foreach($matier->result() as $mat):?>
                    <option value="<?php echo $mat->mt_id; ?>"><?php echo $mat->mt_nom; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="ex_niv">Niveau Scolaire</label>
                <select class="form-control" id="ex_niv" name="ex_niv">
                  <option value="2-BAC">2-BAC</option>
                  <option value="1-BAC">1-BAC</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ex_date">Date</label>
                <input type="Date" class="form-control" id="ex_date" name="ex_date" placeholder="Enter la Date">
              </div>
              <div class="form-group">
                <label for="ex_dure">La durée</label>
                <input type="number" step="0.1" class="form-control" id="ex_dure" name="ex_dure" placeholder="Enter la durée">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="save" name="save">Ajouter</button>
              </div>
            </form>
    </div>
</div>