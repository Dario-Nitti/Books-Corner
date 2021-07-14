{include file="header.tpl" title="Profilo"}


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" id="datac" class="w3-bar-item w3-button active"><strong>Lista desideri</strong></a><br>
            <a href="Order.php" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h2> Benvenuto {$user.first_name}</h2><br><br>
                <div class="grid-container">
                    {if !empty($books)}
                        <div class="grid-item">
                            {foreach from=$books item="book"}
                            <a href="Product-item.php?id={$book.id}"><img src="{$book.pic}" style="width:20%">
                                <p><strong>{$book.title}</strong></p></a>
                            {/foreach}
                        </div>
                        {else}
                    <div></div>
                    {/if}
                </div>
            </section>
        </div>
    </div>
</div>


{include file="footer.tpl"}


