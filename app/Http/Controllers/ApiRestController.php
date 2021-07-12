<?php

    use Illuminate\Routing\Controller as BaseController;
    use App\Models\User;
    use App\Models\Post;
    use App\Models\Comment;

    class ApiRestController extends BaseController
    {
        public function view(){
            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            //leggiamo l'utente connesso
            //prendiamo l'id dell'utente dalla sessione
            $user = User::find(session('user_id'));

            return view('apiRest');
        }

    }

?>
