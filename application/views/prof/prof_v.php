 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les professeurs</h2>   
                <h5>Gestion des professeur</h5>
            </div>
        </div>
        <hr />
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
                             <a class="btn btn-warning" href="#" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="#" role="button">
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
</div>