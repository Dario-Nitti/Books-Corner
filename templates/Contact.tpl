
{include file="header.tpl" title="Contatti"}

<body>
<br>
<div class="container card">
<form action="Mailer.php" method="POST" id="actionID">
    <h2>Contattaci</h2>
    <p>Hai domande? Non esitare a contattarci direttamente. Il nostro team ti aiuterà.</p>


            <p><strong>Email</strong></p>
            <input type="email" id="name" name="name" class="form-control" placeholder="Nome"><br>

            <p><strong>Messaggio</strong></p>
            <textarea type="text" id="message" name="message" class="form-control"
                      placeholder="Inserisci qui il tuo testo"></textarea><br><br>

            <button onclick="InputNull();" class="btn btn-primary send" type="submit" value="Submit">Invia
            </button>


</form>
</div>
{include file="footer.tpl"}


<script>
    function InputNull() {
        var input = document.getElementById("name");
        var input2 = document.getElementById("email");
        var email = document.getElementById("actionID");

        if (input2.value.length == 0 && input.value.length == 0) {
            alert("Non hai inserito il tuo nome e la tua email");
            email.action = "";
        } else {
            return true;


        }
    }
</script>
</body>
</html>
