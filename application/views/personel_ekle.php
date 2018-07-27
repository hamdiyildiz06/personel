<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css"); ?>">
    <title>Personel Ekle</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h3>Personel Ekle</h3>

            <form action="<?= base_url("personel/insert"); ?>" method="post">
                <div class="form-group">
                    <label for="">Personel Adı</label>
                    <input type="text" class="form-control" name="personel_ad">
                </div>
                <div class="form-group">
                    <label for="">E-mal</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Telefon</label>
                    <input type="text" class="form-control" name="telefon">
                </div>
                <div class="form-group">
                    <label for="">Departman</label>
                    <input type="text" class="form-control" name="departman">
                </div>
                <div class="form-group">
                    <label for="">Adres</label>
                    <input type="text" class="form-control" name="adres">
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
                <a href="<?= base_url(); ?>" class="btn btn-danger">İptal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>