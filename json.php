<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
    
    // create the response
    $response = array();
    
    // Include config file
    require_once "config.php";
    
    // Attempt select query execution
    $sql = "SELECT * FROM MasterTable";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
           
            $index = 0;

            while($row = mysqli_fetch_array($result)){
                
                $response[$index] = array(
                                     'objectId' => $row[0],
                                     'description'=> $row[1]
                                     );
                $index = $index + 1;
            
            }
            // echo "</tbody>";
            // echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            // echo "<p class='lead'><em>No records were found.</em></p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
    

echo json_encode($response); 
?>
