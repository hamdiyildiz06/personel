<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personel Listesi</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
<div class="container">
    <h3 class="text-center">Personel Listesi</h3>
    <hr>
    <a href="<?= base_url("personel/insert_form"); ?>" class="btn btn-primary btn-sm">Yeni Ekle</a> <br> <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <th>#id</th>
        <th>Personel Adı <a href="#">[a-Z] [Z-a]</a></th>
        <th>E-mail <a href="#">[a-Z] [Z-a]</a></th>
        <th>Telefon<a href="#">[0-9] [9-0]</a></th>
        <th>Departman <a href="#">[a-Z] [Z-a]</a></th>
        <th>Adres <a href="#">[a-Z] [Z-a]</a></th>
        <th>İşlemler</th>
        </thead>
        <tbody>
        <?php foreach ($list as $item): ?>
            <tr>
                <td><?= $item->id; ?></td>
                <td><?= $item->personel_ad; ?></td>
                <td><?= $item->email; ?></td>
                <td><?= $item->telefon; ?></td>
                <td><?= $item->departman; ?></td>
                <td><?= $item->adres; ?></td>
                <td>
                    <a href="<?=base_url("personel/update_form/{$item->id}");  ?>" class="btn btn-success btn-xs">Düzenle</a>
                    <a href="<?= base_url("personel/delete/{$item->id}"); ?>" class="btn btn-danger btn-xs">Sil</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>