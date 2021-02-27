<?php $title = "Autenticazione";
include "../View/header.php";?>


    <br>
    <div class="container">
        <div class="row">
            <div class="col login">
                <div class="card">
                    <div class="card-body">
                        <h1>Login</h1><br><br>
                        <p><strong>Email</strong></p>
                        <input type="email" id="Email" name="Email"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password" name="password"><br><br>
                        <p id="wrong" style="color: red"></p>
                        <input type="submit" onclick="insert()" class="btn btn-primary" id="login"
                               value="Accedi"><br><br>
                        <p>Non sei ancora registrato?</p>
                        <button onclick="show()" type="button" class="btn btn-link" style="margin-bottom: 25px">Crea il tuo account</button>
                    </div>
                </div>
            </div>
            <div class="col register" id="signup">
                <div class="card">
                    <div class="card-body">
                        <h1> Sign Up</h1><br><br>
                        <p><strong>Nome e Cognome</strong></p>
                        <input type="text" id="nome" name="Nome&Cognome"><br><br>
                        <p><strong>Email</strong></p>
                        <input type="email" id="email-sign" name="Email"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password-sign" name="password"><br><br>
                       <p id="email" style="color: red"></p>
                        <input type="submit" onclick="email()" class="btn btn-primary" id="signup-btn"
                               value="Registrati">
                        <button onclick="canc()" type="button" class="btn btn-primary" id="canc">Pulisci</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "../View/footer.php";?>