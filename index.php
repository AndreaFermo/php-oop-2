<?php
require_once __DIR__ . '/db.php';
$items= [$croquettes, $kennel, $laser];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet e-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center m-5 text-uppercase">prodotti per animali</h1>
    </header>
    <main>
        <div class="container text-center">
            <div class="row align-items-start">
                <?php foreach($items as $item){
                    ?>
                <div class="col">
                    <div class="card">
                        <h3 class="card-title text-uppercase"><?php echo $item->title;?> <span><i class="<?php echo $item->category->icon;?>"></i></span></h3>
                        <img src="<?php echo $item->image;?>" class="card-img-top" alt="image <?php echo $item->title;?>">
                        <div class="card-body">
                            <h4 class="card-text text-capitalize"><?php echo $item->name;?></h4>
                            <p class="card-text text-capitalize"><?php echo $item->model;?></p>
                            <h5 class="card-text">Prezzo: <?php echo $item->price;?> €</h5>
                            <h6 class="card-text"><?php echo $item->rate;?>/5</h6>
                            <p class="card-text"><?php echo $item->weight . ' ' . $item->unit_of_measure;?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>  
</body>
</html>