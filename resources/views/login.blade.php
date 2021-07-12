<html>
    <head>
        <link rel='stylesheet' href='{{ url("css/login.css") }}'>
        <script src = '{{ url("js/login.js") }}' defer></script>
        <title>TuttoSulCalcio - Accedi</title>
    </head>

    <body>

        <main class="box">

            <div class="info"><h3>TuttoSulCalcio - Accedi</h3></div>

            <section class="area">
            
                @if(isset($old_username))
                <div class="errore">Credenziali non valide</div>
                @endif

                <form name='login' id='form_login' method='post' autocomplete="off">
                    <input type='hidden' name='_token' value='{{ $csrf_token }}'>

                    <div class="username">
                        <div><label for='username'>Nome utente</label></div>
                        <div><input type='text' id='username' name='username' value='{{ $old_username }}'></div>
                    </div>

                    <div class="password">
                        <div><label for='password'>Password</label></div>
                        <div><input type='password' id='password' name='password'></div>
                    </div>

                    <div class="login">
                        <button type='submit'>Accedi</button>
                    </div>

                    <div class="container_signup">
                        <p>Non hai un account? <a href='{{ url("registerView") }}'>Iscriviti</a>.</p>
                    </div>

                </form>

            </section>

        </main>

    </body>

</html>


