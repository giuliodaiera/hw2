<?php

    use Illuminate\Routing\Controller as BaseController;
    use App\Models\User;
    use App\Models\Post;
    use App\Models\Comment;

    class HomeController extends BaseController
    {
        public function home(){
            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            //leggiamo l'utente connesso
            //prendiamo l'id dell'utente dalla sessione
            $user = User::find(session('user_id'));

            return view('home');
        }
    }

?>
