<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Exporter les données</h2>   
                <h5>Export</h5>
            </div>
        </div>
        <hr/>
        <center>
        <div class="row">
        <form action="<?php echo base_url('Export/Excel');?>" method="post">
            <div>
                <p>choisir la Table</p>
                <select class="form-control" id="table" name="table" style="width: 50%;">
                    <option value="profs">Les profs</option>
                    <option value="salles">Les Salles</option>
                </select>
                </br></br>
                <button type="submit" class="btn btn-primary btn-lg" value="save" name="save">L'Exportation des données</button>
            </div>
        </form>
        </div>
        </center>
    </div>
</div>