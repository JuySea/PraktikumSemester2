<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <form method="POST" action="form_belanja.php">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" value="proses" type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>

    <?php 
    #$proses = $_POST["proses"];
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

    #echo 'Proses : '. $proses;
    echo '<br/>Nama Customer : '.$customer;
    echo '<br/>Nama Produk : '.$produk;
    echo '<br/>Jumlah Produk : '.$jumlah;
    ?>

</body>
</html>