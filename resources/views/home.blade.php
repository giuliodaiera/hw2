<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='{{ url("css/home.css") }}'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src = '{{ url("js/home.js") }}' defer></script>
    </head>
    
    <title>TuttoSulCalcio - Home</title>

    <body>
        <header>
            <nav>
                <div id="logo">
                    TuttoSulCalcio
                </div>
                <div id="links">
                    <a class="button" href = '{{ url("profile") }}'>Profile</a>
                    <a class="button" href='{{ url("searchView") }}'>Search</a>
                    <a class="button" href='{{ url("api_rest") }}'>Api Rest</a>
                    <a class="button" href='{{ url("logout") }}'>Logout</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

            </nav>

          <h1>SocialFootball</h1>
          <div class="overlay"></div>
    
        </header>


            <div class="container">

                <!--posts area-->
                <div id='posts_container' class="container2">
                    <h1>Post</h1>
                </div>

                <a class="button" id="add_post" href='{{ url("addPostView") }}'>Nuovo post</a>

                <!-- visualizzare i like -->
                <div class="modal">
        
                    <div class="modal_contents">
                        <div class="modal_close-bar">
                            <span id="x_close">x</span>
                        </div>


                        <div class="allContainer" id="allContainer"></div>

                    </div>
                </div>

            </div>

        </div>
        
    </body>
</html>