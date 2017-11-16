<?php
/**
 * Created by PhpStorm.
 * User: grace
 * Date: 10/2/17
 * Time: 6:25 PM
 */

include '../includes/db_connection.php';
$project = substr($_GET['bIJNFHnj09093nkjndsjjnAnhgHKndS'], 32);
$app = substr($_GET['b09IJNFHnj09093nkjndsjjnHJNHDFNKuj8'], 32);
$amt = $_GET['amt'];

$conn = connect_to_db();
$condetails=mysqli_query($conn,"UPDATE projects SET status='progress', freelancerid='".$app."', admin_price='".$amt."' WHERE projectid='".$project."';") or die( mysqli_error($conn));
if(!$condetails){
    echo '
        <script>
            window.location = "../admin?dashboard=project-bids"
        </script>
    ';
}else{
    echo '
        <script>
            window.location = "../admin?dashboard=project-bidding"
        </script>
    ';
}