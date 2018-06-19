 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les professeurs</h2>   
                <h5>Gestion des professeur</h5>
            </div>
        </div>
        <hr />
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('Prof/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Ajouter un Professeur</span> 
            </a>
        </div>
        <br/><br/><br/>
        <!--Table-->
        <table class="table table-hover">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Matières</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($profs) :?>
                    <?php $nb = 1 ?>
                    <?php foreach($profs->result() as $prof):?>
                        <tr>
                         <th scope="row"><?php echo $nb ?></th>
                         <td><?php echo $prof->prof_matr; ?></td>
                         <td><?php echo $prof->prof_nom; ?></td>
                         <td><?php echo $prof->prof_prenom; ?></td>
                         <td><?php echo $prof->prof_email; ?></td>
                         <td><?php echo $prof->mt_nom; ?></td>
                         <td>
                             <a class="btn btn-warning" href="<?php echo base_url('Prof/Update/'.$prof->prof_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('Prof/Delete/'.$prof->prof_id);?>" role="button">
                                 <span class="fa fa-trash-o"> Supprimer</span>
                             </a>
                         </td>
                        </tr>
                        <?php $nb++; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                    <!--end Table body-->
                </table>
                <!--end Table-->
    </div>
    <!--import jquery-->
    <script src="<?php echo base_url('/public/js/jquery.js'); ?>"></script>
    <link href="<?php echo base_url('/public/css/jquery-confirm.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('/public/js/jquery.confirm.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script src="<?php echo base_url('/public/js/prof/prof.js'); ?>"></script>
</div>