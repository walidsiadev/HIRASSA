 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>L'École</h2>   
                <h5>Gestion des École</h5>
            </div>
        </div>
        <hr />
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('Ecole/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Ajouter une École</span> 
            </a>
        </div>
        <br/><br/><br/>
        <!--Table-->
        <table class="table table-hover">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom de Ecole</th>
                            <th>La Ville</th>
                            <th>La Prefécture</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($ecole) :?>
                    <?php $nb = 1 ?>
                    <?php foreach($ecole->result() as $ecol):?>
                        <tr>
                         <th scope="row"><?php echo $nb ?></th>
                         <td><?php echo $ecol->eco_nom; ?></td>
                         <td><?php echo $ecol->v_nom; ?></td>
                         <td><?php echo $ecol->prfct_nom; ?></td>
                         <td>
                             <a class="btn btn-warning" href="<?php echo base_url('Ecole/Update/'.$ecol->eco_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('Ecole/Delete/'.$ecol->eco_id);?>" role="button">
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