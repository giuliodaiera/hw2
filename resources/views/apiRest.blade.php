<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='{{ url("css/api_rest.css") }}'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src = '{{ url("js/script_api.js") }}' defer></script>
    </head>
    
    <title>TuttoSulCalcio</title>

    <body>
        <header>
            <nav>
                <div id="logo">
                    TuttoSulCalcio
                </div>
                <div id="links">
                    <a class="button" href= '{{ url("home") }}'>Home</a>
                    <a class="button" href='{{ url("logout") }}'>Logout</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

            </nav>

          <h1>Campionati di Calcio</h1>
          <div class="overlay"></div>
    
        </header>

        <section>

            <div class="containerAPIselezionaCampionato">
                
                <h1>Seleziona Nazione</h1>

                <form id="form-campionati">
                    Seleziona la nazione di cui vuoi visualizzarne i campionati
                    <select name="tipo" id="tipo">
                        <option value="italia">Italia</option>
                        <option value="inghilterra">Inghilterra</option>
                        <option value="germania">Germania</option>
                        <option value="spagna">Spagna</option>
                        <option value="francia">Francia</option>
                    </select>
                    <input type="submit" value="Seleziona">
                </form>
            </div>

            <section id="leagues-view">
            </section>

            <div class="containerAPIricercaGiocatore">

                <h1>Ricerca giocatore</h1>

                <form id="form-giocatori">
                    Inserisci il nome di un calciatore
                    <input type="text" id="namePlayer">
                    <input type="submit" value="Cerca">
                </form>

                <div id="players-view">
                </div>
            </div>
    
        </section>

        <footer>


            <div class="container">
                
                <div class="author">
                    <h3>Giulio Martino D'Aiera</h3>
                    <p>Matricola: O46002049</p>
                </div>

                <div class="column">

                    <div class="colonna1">
                        <a class="titolo">INFO TUTTOSULCALCIO</a>
                        <br>
                        <br>
                        <a>Statuto-regolamento vigente</a>
                        <br>
                        <a>Organigramma</a>
                        <br>
                        <a>Storia di TuttoSulCalcio</a>
                        <br>
                        <a>Sede e contatti</a>
                        <br>
                        <a>Area riservata società</a>
                        <br>
                        <a>Sponsor e Partner</a>
                        <br>
                    </div>


                    <div class="colonna2">
                        <a class="titolo">SALA STAMPA</a>
                        <br>
                        <br>
                        <a>News</a>
                        <br>
                        <a>Comunicati & Circolari</a>
                        <br>
                        <a>Regolamenti & Documentazione</a>
                        <br>
                        <a>Eventi Lega</a>
                        <br>
                        <a>Foto Gallery</a>
                        <br>
                        <a>Serie A TV</a>
                        <br>
                    </div>


                    <div class="colonna3">
                        <a class="titolo">SERIE A TIM</a>
                        <br>
                        <br>
                        <a>Calendario e Risultati</a>
                        <br>
                        <a>Classifica</a>
                        <br>
                        <a>Calendario completo</a>
                        <br>
                        <a>Come vedere la Serie A TIM</a>
                        <br>
                        <a>Statistiche squadre</a>
                        <br>
                        <a>Statistiche calciatori</a>
                        <br>
                        <a>MP Serie A TIM</a>
                        <br>
                        <a>Linee Guida Gol Dubbi</a>
                        <br>
                        <a>Albo d'oro</a>
                        <br>
                        <a>Archivio</a>
                        <br>
                    </div>
                </div>


            </div>

    
        </footer>
    </body>
</html>