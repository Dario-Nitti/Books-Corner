<?php $title = "Prodotti";
include "../View/header.php";?>

<br>
<div class="row">
    <div class="col-sm-2 search">
        <input type="text" placeholder="Search..">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="col-sm-8">
        <div class="container card">
            <h1>$Settore</h1>
            <div class="grid-container">
                <div class="grid-item">
                    <a href="Product-item.php"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>$Autore</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
                <div class="grid-item">
                    <a href="Product-item.php"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>$Autore</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
                <div class="grid-item">
                    <a href="Product-item.php"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>Autore$</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "../View/footer.php";?>
