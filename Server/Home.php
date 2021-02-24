
<?php $title = "Welcome";
include_once "../View/header.php"; ?>
<br><br>
<div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../View/img/slider1.jpg" alt="sconto1" style="width:100%;">
                </div>

                <!-- <div class="item">
                     <img src="/img/sconto2.jpg" alt="sconto2" style="width:100%;">
                 </div>
                 -->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container news">
    <h1> TUTTE LE NOVITÀ</h1>
    <h3>Tutte le nuove uscite subito disponibili!!</h3>
    <div class="grid-container">
        <div class="grid-item">
            <a href=""><img src="img/robot.jpg" alt="poesie" style="width:20%">
                <p><strong>Io Robot</strong></p></a>
            <p1> Isaac Asimov</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="../View/img/Viaggi.jpg" alt="poesie" style="width:20%">
                <p><strong>Viaggi nel tempo</strong></p></a>
            <p1>James Gleick</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="../View/img/5.jpg" alt="poesie" style="width:20%">
                <p><strong>1984</strong></p></a>
            <p1>George Orwell</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="../View/img/4.jpg" alt="poesie" style="width:20%">
                <p><strong>Il codice da Vinci</strong></p></a>
            <p1>Dan Brown</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="../View/img/1.jpg" alt="poesie" style="width:20%">
                <p><strong>La stanza 13</strong></p></a>
            <p1>Robert Swindells</p1>
            <br>
            <p2>prezzo</p2>
        </div>

    </div>
</div>

<?php include_once "../View/footer.php";?>



