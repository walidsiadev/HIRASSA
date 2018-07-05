<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Salles</h2>   
                <h5>Gestion des Salles</h5>
            </div>
        </div>
        <hr/>
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('Salle/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Ajouter une Salle</span> 
            </a>
        </div>
        <br/><br/><br/>
        <!--Table-->
        <center>
        <table class="table table-hover">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Numération de la Salle</th>
                            <th>Capacité</th>
                            <th>Ecole</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($salle) :?>
                    <?php $a=1;?>
                    <?php foreach($salle->result() as $sal) :?>
                        <tr>
                         <th scope="row"><?php echo $a;?></th>
                         <td><?php echo $sal->sal_num; ?></td>
                         <td><?php echo $sal->sal_cap; ?></td>
                         <td><?php echo $sal->eco_nom; ?></td>
                         <td>
                         <div>
                             <a class="btn btn-warning" href="<?php echo base_url('Salle/Update/'.$sal->sal_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('Salle/Delete/'.$sal->sal_id);?>" role="button">
                                 <span class="fa fa-trash-o"> Supprimer</span>
                             </a>
                         </td>
                         
                        </tr>
                        <?php $a++;?>
                        <?php endforeach ;?>
                    <?php endif ;?>
                    </tbody>
                    <!--end Table body-->
                </table>
                <!--end Table-->
    </div>
</div>