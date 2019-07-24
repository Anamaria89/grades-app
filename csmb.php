
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">CSMB</h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM CSMB";
				
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Grade 1</th>";
                                        echo "<th>Grade 2</th>";
										echo "<th>Grade 3</th>";
										echo "<th>Grade 4</th>";
										echo "<th>Average</th>";
										echo "<th>Result</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['grade_1'] . "</td>";
										echo "<td>" . $row['grade_2'] . "</td>";
										echo "<td>" . $row['grade_3'] . "</td>";
										echo "<td>" . $row['grade_4'] . "</td>";
										 
                       
										$sum = '';
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_1'] < $row['grade_2'] && $row['grade_1'] < $row['grade_3'] && $row['grade_1'] < $row['grade_4'] ){
												$sum = ($row['grade_2'] + $row['grade_3'] + $row['grade_4'])/3;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_2'] < $row['grade_1'] && $row['grade_2'] < $row['grade_3'] && $row['grade_2'] < $row['grade_4'] ){
												$sum = ($row['grade_1'] + $row['grade_3'] + $row['grade_4'])/3;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_3'] < $row['grade_1'] && $row['grade_3'] < $row['grade_2'] && $row['grade_3'] < $row['grade_4'] ){
												$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_4'])/3;
											}
										echo "<td>" .$sum. "</td>";
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_4'] < $row['grade_1'] && $row['grade_4'] < $row['grade_2'] && $row['grade_4'] < $row['grade_3'] ){
												$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'])/3;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_2'] < $row['grade_3'] && $row['grade_2'] < $row['grade_4'] ){
												$sum = ($row['grade_3'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_3'] < $row['grade_2'] && $row['grade_3'] < $row['grade_4'] ){
												$sum = ($row['grade_2'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_1'] < $row['grade_3'] && $row['grade_1'] < $row['grade_4'] ){
												$sum = ($row['grade_3'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_3'] < $row['grade_1'] && $row['grade_3'] < $row['grade_4'] ){
												$sum = ($row['grade_1'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_1'] < $row['grade_2'] && $row['grade_1'] < $row['grade_4'] ){
												$sum = ($row['grade_2'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_2'] < $row['grade_1'] && $row['grade_2'] < $row['grade_4'] ){
												$sum = ($row['grade_1'] + $row['grade_4'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											if($row['grade_4'] < $row['grade_1'] && $row['grade_4'] < $row['grade_2'] ){
												$sum = ($row['grade_1'] + $row['grade_2'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											if($row['grade_1'] < $row['grade_2'] && $row['grade_1'] < $row['grade_3'] ){
												$sum = ($row['grade_2'] + $row['grade_3'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											if($row['grade_2'] < $row['grade_1'] && $row['grade_2'] < $row['grade_3'] ){
												$sum = ($row['grade_1'] + $row['grade_3'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
										
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											if($row['grade_3'] < $row['grade_1'] && $row['grade_3'] < $row['grade_2'] ){
												$sum = ($row['grade_1'] + $row['grade_2'])/2;
												echo "<td>" .$sum. "</td>";
											}
										
										}
									    
										if(is_null($row['grade_1']) && is_null($row['grade_2']) && !is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(is_null($row['grade_1']) && !is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(!is_null($row['grade_1']) && is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(!is_null($row['grade_1']) && is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(!is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_1'] + $row['grade_2'] + $row['grade_3'] + $row['grade_4'])/2;
									    echo "<td>" .$sum. "</td>";
										}
										if(!is_null($row['grade_1']) && is_null($row['grade_2']) && is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_1']);
									    echo "<td>" .$sum. "</td>";
										}
										if(is_null($row['grade_1']) && !is_null($row['grade_2']) && is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_2']);
									    echo "<td>" .$sum. "</td>";
										}
										if(is_null($row['grade_1']) && is_null($row['grade_2']) && !is_null($row['grade_3']) && is_null($row['grade_4']) ){
											$sum = ($row['grade_3']);
									    echo "<td>" .$sum. "</td>";
										}
										if(is_null($row['grade_1']) && is_null($row['grade_2']) && is_null($row['grade_3']) && !is_null($row['grade_4']) ){
											$sum = ($row['grade_4']);
									    echo "<td>" .$sum. "</td>";
										}	
										
										if( $sum > 8){
									    echo "<td>Passed</td>";
										}else {
											 echo "<td>Failed</td>";
										}
										
										
										
                                   
                                    echo "</tr>";
								
								}
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    unset($pdo);
                    ?>
                </div>
				
            </div>        
        </div>
    </div>
</body>
</html>