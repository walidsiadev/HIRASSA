 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>les Villes</h2>   
                <h5>Gestion des villes</h5>
            </div>
        </div>
        <hr/>
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('ville/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Ajouter une ville</span> 
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($vill) :?>
                    <?php $a=1?>
                    <?php foreach($vill->result() as $vil) :?>
                        <tr>
                         <th scope="row"><?php echo $a;?></th>
                         <td><?php echo $vil->v_nom; ?></td>
                         <td>
                             <a class="btn btn-warning" href="<?php echo base_url('ville/Update/'.$vil->v_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('ville/Delete/'.$vil->v_id);?>" role="button">
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
                <center>
    </div>
</div>