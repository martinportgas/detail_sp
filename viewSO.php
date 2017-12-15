<?php 
	include ('header.php'); 
	include ('config/config.php');
?>

<div class="content-wrapper">
	<h3 class="page-heading mb-4"></h3>
  <div class="row">
		<div class="col-lg-12">
    	<div class="card">
      	<div class="card-body">
			<h5 class="card-title mb-8">
				<div class="col-lg-4">Single Sales Order Detail</div>
			</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
    	<div class="card">
        <div class="card-body">
        	<h5 class="card-title mb-8">
					<div class="col-lg-4">
						<form method="post">
							<div class="input-group">
								<input type="text" name="txtSearch" class="form-control" placeholder="Search ...">
								<input type="submit" name="submit" class="btn btn-primary" value="Search"/>
							</div>
						</form>
					</div>
					</h5>
          <div class="table-responsive">
          	<table class="table center-aligned-table" id="myTable">
            	<thead>
              	<tr class="text-primary">
                  	<th>#</th>
                  	<th>Brand</th>
                  	<th>ICCID</th>
                  	<th>MSISDN</th>
                  	<th>Exp. Date</th>
					<th>Area</th>
					<th>HLR</th>
                  	<th>Dealer ID</th>
					<th>SO No.</th>
                  	<th>Program</th>
                  	<th>Dist. Date</th>
                </tr>
              </thead>
              <tbody>
								<?php 
									if(isset($_POST['submit'])){
										if(!empty($_POST['txtSearch'])){
											$dir = $directory; 
											$folders = glob($dir . '/*', GLOB_ONLYDIR); 
											$files = array_filter(glob($dir . '/*'), 'is_file'); 			
											$count = count($files);
											
											if($count > 0){
												$i = 1;
												for($j = 0; $j<=$count -1; $j++){
													$file_name = $files[$j];
													$result = array();
													$file=fopen($file_name,"r") or exit("Unable to open file!");
	
													while (!feof($file)){
															$line_of_text = fgets($file);
															$parts = explode(';', $line_of_text);
	
															$brand = isset($parts[0]) ? $parts[0] : null;
															$iccid = isset($parts[1]) ? $parts[1] : null;
															$mssidn = isset($parts[2]) ? $parts[2] : null;
															$exp_date = isset($parts[3]) ? $parts[3] : null;
															$area = isset($parts[4]) ? $parts[4] : null;
															$hlr = isset($parts[5]) ? $parts[5] : null;
															$dealer_id = isset($parts[6]) ? $parts[6] : null;
															$so = isset($parts[7]) ? $parts[7] : null;
															$program = isset($parts[8]) ? $parts[8] : null;
															$dist_date = isset($parts[9]) ? $parts[9] : null;
															
															$result[]= array(
																				'brand'=>$brand,
																				'iccid'=>$iccid,
																				'msisdn'=>$mssidn,
																				'exp_date'=>$exp_date,
																				'area'=>$area,
																				'hlr'=>$hlr,
																				'dealer_id'=>$dealer_id,
																				'so'=>$so,
																				'program'=>$program,
																				'dist_date'=>$dist_date
																			);
													}
														
													fclose($file);
														
													foreach($result as $item){
														if($item['so'] == $_POST['txtSearch']){
															echo '<tr class="">
																			<td>'.$i.'</td>
																			<td>'.$item['brand'].'</td>
																			<td>'.$item['iccid'].'</td>
																			<td>'.$item['msisdn'].'</td>
																			<td>'.$item['exp_date'].'</td>
																			<td>'.$item['area'].'</td>
																			<td>'.$item['hlr'].'</td>
																			<td>'.$item['dealer_id'].'</td>
																			<td>'.$item['so'].'</td>
																			<td>'.$item['program'].'</td>
																			<td>'.$item['dist_date'].'</td>
																			</tr>';
															$i+=1;
														}

														if($item['iccid'] == $_POST['txtSearch']){
															echo '<tr class="">
																			<td>'.$i.'</td>
																			<td>'.$item['brand'].'</td>
																			<td>'.$item['iccid'].'</td>
																			<td>'.$item['msisdn'].'</td>
																			<td>'.$item['exp_date'].'</td>
																			<td>'.$item['area'].'</td>
																			<td>'.$item['hlr'].'</td>
																			<td>'.$item['dealer_id'].'</td>
																			<td>'.$item['so'].'</td>
																			<td>'.$item['program'].'</td>
																			<td>'.$item['dist_date'].'</td>
																			</tr>';
															$i+=1;
														}
													}
												}
											}else{
												echo "<td>File not found.</td>";
										}
									}else{
										echo "<td>Data not found</td>";
								}
							}	
							?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>        
  </div>
</div>
<?php include ('footer.php'); ?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>