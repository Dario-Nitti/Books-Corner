{include file="header.tpl" title="Benvenuto"}
<link rel="stylesheet" href="./templates/css/products.css">

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
                    <img src="./templates/img/slider1.jpg" alt="sconto1" style="width:100%;">
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
    <h3>Tutte le nuove uscite subito disponibili!!</h3><br><br>

    <div class="row">
        {if (!empty($books))}
            {foreach from=$books item="book"}
                <div class="col-md-3">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="Product-item.php?id={$book.id}">
                                <img src="{$book.pic}" alt="product-catalog" style="width:50%">
                        </div>
                        <div class="product-content">
                            <h3 class="title"><strong> {$book.title}</strong></h3></a>
                            <div class="price">{$book.price} €</div>
                        </div>
                    </div>
                </div>

            {/foreach}
        {else}
            <div></div>
        {/if}
    </div>
    <br>
</div>

{include file="footer.tpl"}



