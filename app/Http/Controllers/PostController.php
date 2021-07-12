<?php

    use Illuminate\Routing\Controller as BaseController;
    use App\Models\User;
    use App\Models\Post;
    use App\Models\Comment;
    use App\Models\Like;

    class PostController extends BaseController
    {
        public function post(){

            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            $user = User::find(session('user_id'));

            //leggiamo i post dal database
            $posts = Post::join('users', 'users.id', '=', 'posts.user_id')
                           ->orderBy('posts.time', 'DESC')
                           ->get(['users.id as userid', 'users.name as name',
                                 'users.surname as surname', 'users.username', 'posts.id as postid',
                                 'posts.time as time', 'posts.text', 'posts.nlikes as nlikes',
                                 'posts.ncomments as ncomments']); //restituisce un array di entità

            foreach($posts as $post){
                $like = Like::where('post_id', $post->postid)->where('user_id', $user->id)->first();
                if(!$like){
                    $post['liked'] = false;
                }
                else{
                    $post['liked'] = true;
                }
            }

            return $posts;
        }
        
    }

?>
