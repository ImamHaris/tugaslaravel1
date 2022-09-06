<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Nomor 2</title>
</head>
<body>
    <?php
    
    // Diberikan array seperti dibawah ini
    $arr= array(1,2,3,4,5);


    // Carilah nilai array dan indexnya dengan kondisi
    // nilai target lebih kecil dari 4 dan lebih besar dari 2;

    $target = NULL;
    $targetIndex = NULL;

    // Lengkapi kode dibawah ini ganti ... dengan kode yang sesuai

    foreach($arr as $key => $value) {
        if($value<4 && $value>2) {
            $target = $value;
            $targetIndex = $key;
        }
    }

    echo "ketemu nih, aku ada di index $targetIndex dengan nilai $target";

    
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>
