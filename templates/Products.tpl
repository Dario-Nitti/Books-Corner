{include file="header.tpl" title="Avventura"}
<link rel="stylesheet" href="./templates/css/products.css">

<br>


    <div class="container card">
        <br>

        <div class="row">
            <br>
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

</div>

{include file="footer.tpl"}




