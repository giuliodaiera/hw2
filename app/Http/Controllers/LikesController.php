<?php

    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;
    
    use App\Models\User;
    use App\Models\Post;
    use App\Models\Like;

    class LikesController extends BaseController
    {

        public function methodAddLike(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            $user = User::find(session('user_id'));
            $post_id = $request->postid;

            //inserisce nella tabella likes
            $like = new Like;
            $like->user_id = $user->id;
            $like->post_id = $post_id;
            $like->save();   

            $post = Post::find($post_id);

            return response()->json([
                'postid' => $post->id,
                'nlikes' => $post->nlikes
            ]);

        }


        public function methodRemoveLike(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            //prendiamo l'id dell'utente della sessione
            $user = User::find(session('user_id'));
            $post_id = $request->postid;
            
            //elimina un record nel database da un modello
            $like = Like::where('user_id', $user->id)->where('post_id', $post_id)->delete();

            $post = Post::find($post_id);

            return response()->json([
                'postid' => $post->id,
                'nlikes' => $post->nlikes
            ]);
        }


        public function methodViewLikes(Request $request){

            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            $post_id = $request->postid; 
        
            //leggiamo i post dal database
            $likes = Like::join('posts', 'likes.post_id', '=', 'posts.id')
                           ->join('users', 'users.id', '=', 'likes.user_id')
                           ->where('posts.id', $post_id)
                           ->get(['users.username as username']); //restituisce un array di entità

            return $likes;
        }

    }

?>