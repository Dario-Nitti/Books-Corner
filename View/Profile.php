<?php $title = "Profile";
session_start();


include_once "../View/header.php";
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>



<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" id="datac"  class="w3-bar-item w3-button active"><strong>I Miei Dati</strong></a><br>
            <a href="Order.php" id="orderac"  class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Payment.php" id="payac" class="w3-bar-item w3-button"><strong>Metodi di Pagamento</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <a id="data">
                    <h2> Benvenuto <?php echo $user?> </h2><br><br>
                    <p><strong>${ID}</strong></p>
                    <p><strong>${Nome e Cognome}</strong></p>
                    <p><strong>${Email}</strong></p>
                    <p><strong>${Password}</strong></p>
                    <p><strong>${Indirizzo}</strong></p>
                    <p><strong>${Città}</strong></p>
                    <p><strong>${Cap}</strong></p>
                </a>
            </section>
        </div>
    </div>
</div>


<?php include_once "../View/footer.php";?>


