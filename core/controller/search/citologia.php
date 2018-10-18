<?php
	include("../../model/db.php");
ini_set('display_errors', 'Off');

$id_datacitologia=intval($_REQUEST['id_datacitologia']);

$sqlData="SELECT * FROM datacitologia WHERE id_datacitologia = '$id_datacitologia'";
$executeData=$connect-> query($sqlData);
$Data = $executeData->fetch_assoc();

echo'
            <div class="col-md-12">
              <div class="form-group">
                <label>Hallazgo (*)</label>
<textarea class="form-control" id="hallazgo" name="hallazgo" required>'.$Data[hallazgo].'</textarea>
              </div>
            </div>
            
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Conclusion (*)</label>
<textarea class="form-control" id="conclusion" name="conclusion" required>'.$Data[conclusion].'</textarea>
              </div>
            </div>
            
';
                

?>