<?php
	include("../../model/db.php");
ini_set('display_errors', 'Off');

$id_databiopsia=intval($_REQUEST['id_databiopsia']);

$sqlData="SELECT * FROM databiopsia WHERE id_databiopsia = '$id_databiopsia'";
$executeData=$connect-> query($sqlData);
$Data = $executeData->fetch_assoc();

echo'
            <div class="col-md-12">
              <div class="form-group">
                <label>Hallazgo Macro (*)</label>
<textarea class="form-control" id="hallazgomacro" name="hallazgomacro" required>'.$Data[hallazgomacro].'</textarea>
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Hallazgo Micro (*)</label>
<textarea class="form-control" id="hallazgomicro" name="hallazgomicro" required>'.$Data[hallazgomicro].'</textarea>
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