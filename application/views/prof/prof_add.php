 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les professeurs</h2>   
                <h5>Ajouter un Professeur</h5>
            </div>
        </div>
        <hr/>
        <?php if($ok):?>
        <div class="alert alert-success" role="alert">
          <?php echo $ok; ?>
        </div>
        <?php endif;?>
        <form action="<?php echo base_url('Prof/Add');?>" method="post">
             <div class="form-group">
                <label for="prof_matr">Matricule de professeur</label>
                <input type="text" class="form-control" id="prof_matr" name="prof_matr" placeholder="Enter Matricule">
              </div>
              <div class="form-group">
                <label for="prof_nom">Nom de professeur</label>
                <input type="text" class="form-control" id="prof_nom" name="prof_nom"  placeholder="Enter Nom">
              </div>
              <div class="form-group">
                <label for="prof_prenom">Prenom de professeur</label>
                <input type="text" class="form-control" id="prof_prenom" name="prof_prenom" placeholder="Enter Prenom">
              </div>
              <div class="form-group">
                <label for="prof_email">Email de professeur</label>
                <input type="email" class="form-control" id="prof_email" name="prof_email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="mt_nom">Nom de matière de professeur</label>
                <select class="form-control" id="mt_id" name="mt_id">
                    <?php if($matieres) :?>
                    <?php foreach($matieres->result() as $matiere):?>
                    <option value="<?php echo $matiere->mt_id; ?>"><?php echo $matiere->mt_nom; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" value="save" name="save">Ajouter</button>
              </div>
            </form>
    </div>
</div>