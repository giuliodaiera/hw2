<html>

    <head>
    <link rel='stylesheet' href='{{ url("css/login.css") }}'>
        <script src = '{{ url("js/signup.js") }}' defer></script>

        <title>TuttoSulCalcio - Iscriviti</title>
    </head>

    <body>
        <main class=box>
            
            <div class="info"><h3>TuttoSulCalcio - Registrazione</h3></div>

            <section class="area">
                <form name='form_signup' method="POST" action="{{url('register')}}" autocomplete="off">

                    <?php if (count($errors) > 0) : ?>
                            <div class="error">
                                <?php foreach ($errors as $error) : ?>
                                <p><?php echo $error ?></p>
                                <?php endforeach ?>
                            </div>
                        <?php  endif ?>

                    <input type='hidden' name='_token' value='{{ $csrf_token }}'>

                    <div class="name">
                        <div>
                            <label for='name'>Nome</label></div>
                            <div><input type='text' onkeyup="checkName()" name='name' id="name-field"></div>
                            <span class="span-hide" id="span-name">Nome non valido</span>
                        </div>

                        <div class="surname">
                            <div><label for='surname'>Cognome</label></div>
                            <div><input type='text' onkeyup="checkSurname()" name='surname' id="surname-field"></div>
                            <span class="span-hide" id="span-surname">Cognome non valido</span>
                        </div>
                    </div>

                    <div class="username">
                        <div><label for='username'>Nome utente</label></div>
                        <div><input type='text' onkeyup="checkUsername()" name='username' id="username-field"></div>
                        <span class="span-hide" id="span-username">Nome utente non valido</span>
                        <span class="span-hide" id="span-username_already_exist">Nome utente già esistente</span>
                    </div>

                    <div class="email">
                        <div><label for='email'>Email</label></div>
                        <div><input type='text' onkeyup="checkEmail()" name='email' id="email-field"></div>
                        <span class="span-hide" id="span-email">Email non valida</span>
                        <span class="span-hide" id="span-email_already_exist">Email già esistente</span>
                    </div>

                    <div class="password">
                        <div><label for='password'>Password</label></div>
                        <div><input type='password' onkeyup="checkPassword()" name='password' id="password-field"></div>
                        <span class="span-hide" id="span-password">Password non valida</span>
                    </div>

                    <div class="confirm_password">
                        <div><label for='confirm_password'>Conferma Password</label></div>
                        <div><input type='password' id="confirm_password-field" onkeyup="checkConfirmPassword()" name='confirm_password'></div>
                        <span class="span-hide" id="span-confirm_password">Le password non corrispondono</span>
                    </div>

                    <div class="allow"> 
                        <div><label><input type='checkbox' name='allow' value="1" id='smallBox' onclick="checkAllow()">Acconsento al trattamento dei miei dati personali</label></div>
                        <span class="span-hide" id="span-allow">Accetta la condizione</span>
                    </div>

                    <div class="submit">
                        <button type="submit" class="btn" name="reg_user" id="register" disabled>Registrati</button>
                    </div>
                    
                    <div class="container signin">
                        <p>Hai già un account? <a href='{{ url("login") }}'>Accedi</a>.</p>
                    </div>

                </form>
            </section>
        </main>
    </body>

</html> 