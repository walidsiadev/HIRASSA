 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Préfectures</h2>   
                <h5>Gestion des Préfectures</h5>
            </div>
        </div>
        <hr />
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('Prefect/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Ajouter une Préfecture</span> 
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
                            <th>Nom</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($prefect) :?>
                    <?php $a=1;?>
                    <?php foreach($prefect->result() as $per) :?>
                        <tr>
                         <th scope="row"><?php echo $a ;?></th>
                         <td><?php echo $per->prfct_nom; ?></td>
                         <td>
                             <a class="btn btn-warning" href="<?php echo base_url('Prefect/Update/'.$per->prfct_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('Prefect/Delete/'.$per->prfct_id);?>" role="button">
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