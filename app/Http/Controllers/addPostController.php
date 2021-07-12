<?php

    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;

    use App\Models\User;
    use App\Models\Post;

    class AddPostController extends BaseController
    {

        public function view(){
            
            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            
            return view('addPost')
            ->with('csrf_token', csrf_token());
        }

        public function addPostCreate(Request $request){
            
            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            $user = User::find(session('user_id'));
            $text = $request->text;
            

            //inserisce nella tabella posts
            $add_post = new Post;
            $add_post->user_id = $user->id;
            $add_post->text = $text;
            $add_post->save();   

            return redirect('home');

        }

    }

?>
