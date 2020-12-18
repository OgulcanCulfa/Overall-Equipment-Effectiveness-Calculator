<?php



include_once "./config/config.php";

// Gelen bilgileri filtreleme

$POST = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$planlanmis = $POST['planlanmis'];
$plansiz = $POST['plansiz'];
$standart = $POST['standart'];
$uretim_miktari = $POST['uretim_miktari'];
$saglam = $POST['saglam'];
$toplam_uretim = $POST['toplam_uretim'];
$kullanilabilirlik = (($planlanmis - $plansiz) / $planlanmis);
$performans = (($standart * $uretim_miktari) / $planlanmis);
$kalite = ($saglam / $toplam_uretim);
$oee = ($kullanilabilirlik * $performans) * 100;




    
$insert = "INSERT INTO hesap (planlanmis_uretim,plansiz_durus, 
standart_cevrim_zamani,uretim_miktari,saglam_urun_miktari,
toplam_uretim_miktari,kullanilabilirlik,performans,kalite,oee)
VALUES ('$planlanmis','$plansiz','$standart','$uretim_miktari','$saglam',
'$toplam_uretim','$kullanilabilirlik','$performans','$kalite','$oee');";



// Insert new row

function insertData($conn,$insert) {

    // Execute the query

    if (!mysqli_query($conn, $insert)) {
        header('index.php'); 
        echo "<script>alert('Insert operation has failed')</script>";
    } 
}



// Get all rows

function getAll($conn) {

      
    $get = "SELECT * FROM hesap";
    $result = mysqli_query($conn,$get);
    

    while($row = $result->fetch_array()) {
        print_r($row);
        
    }

    // Clear the memory

    mysqli_free_result($result); 

    // Close conn 

    $conn->close();

      
}

// Get the last inserted record

function getLastInserted($conn) {

    $last = "SELECT * FROM hesap ORDER BY id DESC LIMIT 1;";
    $result = mysqli_query($conn,$last);
    $row = mysqli_fetch_assoc($result);

    return $row;

    // Clear the memory

    mysqli_free_result($result); 

    // Close conn 

    $conn->close();

    
}




insertData($conn,$insert);  
$last_row = getLastInserted($conn);


?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Ekipman Etkililik Oranı Hesaplayıcı</title>
</head>
<body class="bg-light">
    
    <div class="d-flex justify-content-center">

        <h1 class="my-5">Ekipman Etkililik Oranı (OEE) Hesaplama</h1>

    </div>

    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item fw-bold">Kullanılabilirlik:
                    <span class="fw-normal">%<?php print_r($last_row['kullanilabilirlik']); ?></span>
                </li>
                <li class="list-group-item fw-bold">Performans:
                    <span class="fw-normal">%<?php print_r($last_row['performans']); ?></span>
                </li>
                <li class="list-group-item fw-bold">Kalite:
                    <span class="fw-normal">%<?php print_r($last_row['kalite']); ?></span>
                </li>
                <li class="list-group-item fw-bold">OEE:
                    <span class="fw-normal">%<?php print_r($last_row['oee']); ?></span>
                </li>
            </ul>
        </div>
    </div>