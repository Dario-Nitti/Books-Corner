{include file="header.tpl" title="Accedi o Registrati"}

<br>
<div class="container">
    <div class="row">
        <div class="col login">
            <div class="card">
                <div class="card-body">
                    <h1>Login</h1><br><br>
                    <form method="post" action="Autentication.php">
                        <p><strong>Email</strong></p>
                        <input type="email" id="Email" name="email-log"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password" name="password-log"><br><br>
                        <p id="wrong" style="color: red"></p>
                        <input type="submit" name="login" onclick="insert()" class="btn btn-primary" id="login"
                               value="Accedi"><br><br>
                    </form>
                    <p>Non sei ancora registrato?</p>
                    <button onclick="show()" type="button" class="btn btn-link" style="margin-bottom: 25px">Crea il tuo account</button>

                </div>
            </div>
        </div>
        <div class="col register" id="signup">
            <div class="card">
                <div class="card-body">
                    <h1> Sign Up</h1><br><br>
                    <form method="post" action="RegistrationController.php">
                        <p><strong>Nome</strong></p>
                        <input type="text" id="nome" name="nome"><br><br>
                        <p><strong>Cognome</strong></p>
                        <input type="text" id="cognome" name="cognome"><br><br>
                        <p><strong>Email</strong></p>
                        <input type="email" id="email-sign" name="email-sign"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password-sign" name="password-sign"><br><br>
                        <p id="email" style="color: red"></p>
                        <input type="submit" onclick="email()" class="btn btn-primary" id="signup-btn"
                               value="Registrati">
                    </form>
                    <button onclick="canc()" type="button" class="btn btn-primary" id="canc">Pulisci</button>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}
