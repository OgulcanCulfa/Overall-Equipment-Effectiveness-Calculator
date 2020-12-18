
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

    <div class="container col-md-12 justify-content-center mt-5">

        <form action="review.php" method="POST">

            <!-- Form Bilgileri -->

            <div class="form-floating mb-4">
                <input type="number" name="planlanmis" class="form-control" id="floatingInput" placeholder="plan">
                <label for="planlanmis">Planlanmış Üretim Süresi</label>
            </div>

            <div class="form-floating mb-4">
                <input type="number" name="plansiz" class="form-control" id="floatingPassword" placeholder="plan">
                <label for="plansiz">Plansız Duruş</label>
            </div>

            <div class="form-floating mb-4">
                <input type="number" name="standart" class="form-control" id="floatingInput" placeholder="cevrim">
                <label for="standart">Standart Çevrim Zamanı</label>
            </div>

            <div class="form-floating mb-4">
                <input type="number" name="uretim_miktari" class="form-control" id="floatingPassword" placeholder="uretim">
                <label for="uretim_miktari">Üretim Miktarı</label>
            </div>

            <div class="form-floating mb-4">
                <input type="number" name="saglam" class="form-control" id="floatingInput" placeholder="saglam">
                <label for="saglam">Sağlam Ürün Miktarı</label>
            </div>

            <div class="form-floating">
                <input type="number" name="toplam_uretim" class="form-control" id="floatingPassword" placeholder="toplam">
                <label for="toplam_uretim">Toplam Üretim Miktarı</label>
            </div>

            <!-- Buton -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary btn-lg mt-4">Hesapla</button>
            </div>
    </form>
       
    </div>

    

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

