<?php
    include('koneksi.php');
   
    $sql        =   "SELECT * FROM pengaliran WHERE status= 1 LIMIT 1";
    $stmt = $PDO->prepare($sql);  
    $stmt->execute();

    // $json_array=array();

    if ($stmt->execute()) {
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['deskripsi'];
            // $json_array[]=$row;
        }    
        
	        // echo json_encode($json_array);
        } else {
            print_r($stmt->errorInfo());
        }

    // $conn->close();
?>