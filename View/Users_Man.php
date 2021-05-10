<?php $title = "Gestione utenti";
session_start();
include_once "../View/header.php";
session_start();
$user= htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>

    <body>

    <br>
    <div class="container card">
        <div class="row">
            <div class="col-4">
                <h2 class="w3-bar-item side">Menu</h2>
                <a href="All-Product.php"  class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
                <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
                <a href="#" class="w3-bar-item w3-button active"><strong>Gestione Utenti</strong></a><br>


            </div>
            <div class="col-8">
                <br>
                <h1 class="new-title">Utenti</h1><br><br>
                <div class="row">
                    <a class="btn btn-light sondaggio col-md-12" data-toggle="modal" data-target="#myModal">$nome utente</a>
                    <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <h5>nome utente<?php echo $user?></h5>
                                    <p>
                                        <?php echo $user?> email utente
                                    </p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p>
                                        <?php
                                        foreach($book as $books)
                                        {
                                            echo '<li>';
                                            echo '<div>' . $books->books_name . '</div>';
                                            echo '</li>';
                                        }
                                        ?>
                                        nome acquisti
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    </body>


<?php include_once "../View/footer.php";?>