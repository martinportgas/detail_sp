<?php 
	include ('header.php'); 
    include ('config/config.php');
    
    $valid_formats = array("txt");
    $path = "Sample/"; 
    $error = "";

    if(isset($_POST['submit'])){
        foreach ($_FILES['files']['name'] as $f => $name) {     
            if ($_FILES['files']['error'][$f] == 4) {
                continue;
            }	       
            if ($_FILES['files']['error'][$f] == 0) {	           
                if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                    $error = "$name is not a valid format";
                    continue;
                }else{ 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
                    $error = "File has successfully uploaded.";
                }
            }
        }
    }
?>

<div class="content-wrapper">
	<h3 class="page-heading mb-4"></h3>
    <div class="row">
	    <div class="col-lg-12">
    	    <div class="card">
      	        <div class="card-body">
                    <h5 class="card-title mb-8">
                        <div class="col-lg-4">Upload Multiple Sales Order</div>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-8">
                    <div class="col-lg-4">
                        <form method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="file" name="files[]" multiple="multiple" class="form-control">
                                <input type="submit" name="submit" class="btn btn-primary" value="Upload"/>
                            </div>
                            <br />
                            <h6 style="color: red">
                                <?php echo $error; ?>
                            </h6>
                        </form>
                    </div>
                </h5>
            </div>
        </div>
    </div>        
  </div>
</div>
<?php include ('footer.php'); ?>