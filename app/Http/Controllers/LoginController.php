<?php

    use Illuminate\Routing\Controller as BaseController;

    use App\Models\User;

    class LoginController extends BaseController
    {
        public function login(){
            //verifichiamo se l'utente ha già fatto il login
            if(session('user_id') != null ){
                return redirect('home');
            } else{
                //verifichiamo se c'è stato un errore nel login
                $old_username = Request::old('username');
                return view('login')
                ->with('csrf_token', csrf_token())
                ->with('old_username', $old_username);
            }
        }

        public function login_post(){

            //verifichiamo che l'utente esista
            //request() è la funzione che utilizziamo per accedere ai dati trasmessi tramite GET o tramite POST
            //request('username') ci da il valore del campo username passato tramite POST alla route, stessa cosa per request('password').
            //i punti interrogativi (?) indicano dove voglio andare a mettere delle variabili che vengono dall'esterno
            //Laravel si occuperà di sostituire le variabili che passiamo ed effettuare l'escape per evitare problemi di injection.
            $user = User::where('username', request('username'))->first();

            if(isset($user)){

                if(password_verify(request('password'), $user->password)){
                    //credenziali valide
                    //impostiamo una sessione salvando l'id dell'utente
                    Session::put('user_id', $user->id);

                    return redirect('home');
                }
            } else{
                //credenziali non valide
                //rimandiamo alla login. La funzione withInput() permette di trasmettere i dati che la route ha ricevuto alla pagina del redirect
                return redirect('login')->withInput(); 
            }

        }

        public function logout(){
            //eliminiamo i dati di sessione
            Session::flush();
            //Torniamo alla login
            return redirect('login');
        }

    }

?>
