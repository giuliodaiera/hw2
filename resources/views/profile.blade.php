<html>

    <head>
    <link rel='stylesheet' href='{{ url("css/profile.css") }}'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <title>TuttoSulCalcio - Profilo: {{ $name }} </title>
    </head>

    <body>
        
        <header>
            <nav>
                <div id="logo">
                    TuttoSulCalcio
                </div>

                <div id="links">
                    <a class="button" href= '{{ url("home") }}'>Home</a>
                    <a class="button" href= '{{ url("logout") }}'>Logout</a>
                </div>

            </nav>
    
        </header>

        <div class="box">

            <div class="info">
                <h3>TuttoSulCalcio - Profilo Utente</h3>
            </div>

            <section class="area">


            <div class="area1">
                    <h4>Name: <span> {{ $name }} </span></h4>
                    <h4>Surname: <span> {{ $surname }} </span></h4>
                    <h4>Username: <span> {{ $username }} </span></h4>
                    <h4>Email: <span> {{ $email }} </span></h4>
                </div>

                <div class="area2">
                    <h4>Post pubblicati: <span> {{ $nposts }} </span> </h4>
                </div>

            </section>

        </div>

    </body>

</html>