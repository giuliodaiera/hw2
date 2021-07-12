<?php

    use Illuminate\Routing\Controller as BaseController;
    use App\Models\User;

    class ProfileController extends BaseController
    {
        public function profile(){
            
            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            $user = User::find(session('user_id'));

            return view('profile')
                ->with('name', $user->name)
                ->with('surname', $user->surname)
                ->with('username', $user->username)
                ->with('email', $user->email)
                ->with('nposts', $user->nposts);
        }
    }

?>
