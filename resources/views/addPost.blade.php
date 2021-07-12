<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='{{ url("css/addPost.css") }}'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src = '{{ url("js/add_post.js") }}' defer></script>
    </head>
    
    <title>TuttoSulCalcio - Home</title>

    <body>
        <header>
            <nav>
                <div id="logo">
                    TuttoSulCalcio
                </div>
                <div id="links">
                    <a class="button" href= '{{ url("home") }}'>Home</a>
                </div>
            </nav>
        </header>


        <div class= "container" id="container_post">

            <section id="newpost">

                <div class="content">
                    <!-- action="do_search_content.php" method="post" -->
                    <h1>Vuoi aggiungere un post?</h1>
                    <label><input type="radio" name="type" value="giphy" id='text'>🖼️ Add post</label>
                 </div>
                
            </section>

        </div>

        <div class="modal">
        
            <div class="modal_contents">
                <div class="modal_close-bar">
                    <span id="x_close">x</span>
                </div>

                <form id='myform' method="POST" action="{{url('create_post')}}" autocomplete="off">
                    <input type='hidden' name='_token' value='{{ $csrf_token }}'>
                    <input type="text" name="type" value="text" hidden>

                    <div class="allContainer">

                        <div class="container_text_submit">
                            <input type="text" name="text" onkeyup="checkText()" id="text_area" placeholder="Insert your text...">
                            <button type="submit" class="btn" name="add_post" id="add_post" disabled>Pubblica</button>
                        </div>

                        <span class="span-hide" id="span-text">Inserire il testo</span>

                    </div>

                </form>
            </div>
        </div>
    </body>
</html>