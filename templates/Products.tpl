{include file="header.tpl" title="Avventura"}

<br>
<div class="row">
    <div class="col-sm-2 search">
        <input type="text" placeholder="Search..">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="col-sm-8">
        <div class="container card">
            <h1>{$categoria}</h1>
            <div class="grid-container">
                {foreach from=$books item="book"}
                <div class="grid-item">

                        <a href="Product-item.php?id={$book.id}"><img src="{$book.pic}"
                                                        alt="product-catalog" style="width:20%">
                            <p><strong>{$book.title}</strong></p></a>
                        <p1>$Autore</p1>
                        <br>
                        <p2>{$book.price}</p2>

                </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}




