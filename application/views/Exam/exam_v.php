 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Les Examens & Planification</h2>   
                <h5>Gestion des Examens & Planification</h5>
            </div>
        </div>
        <hr />
        <br/><br/><br/>
        <div style="float: right;">
            <a class="btn btn-success" href="<?php echo base_url('Examen/Add');?>" role="button">
                <span class="fa fa-plus-circle"> Planifier L'Examen</span> 
            </a>
        </div>
        <!--Table-->
        <center>
        <table class="table table-hover">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>La matière</th>
                            <th>Niveau Scolaire</th>
                            <th>Date</th>
                            <th>La durée</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php if($exams) :?>
                    <?php $a=1;?>
                    <?php foreach($exams->result() as $exam) :?>
                        <tr>
                         <th scope="row"><?php echo $a;?></th>
                         <td><?php echo $exam->mt_nom; ?></td>
                         <td><?php echo $exam->ex_niv; ?></td>
                         <td><?php echo date("d-m-Y", strtotime($exam->ex_date)); ?></td>
                         <td><?php echo $exam->ex_dure; ?></td>
                         <td>
                         <div>
                             <a class="btn btn-warning" href="<?php echo base_url('Examen/Update/'.$exam->ex_id);?>" role="button">
                                 <span class="fa fa-pencil-square-o"> Modifier</span> 
                             </a>
                             <a class="btn btn-danger" href="<?php echo base_url('Examen/Delete/'.$exam->ex_id);?>" role="button">
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