<?php

    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;

    use App\Models\User;
    use App\Models\Post;

    class SearchController extends BaseController
    {
        public function view(){

            //verifichiamo se l'utente ha fatto il login
            if(session('user_id') == null ){
                return redirect('login');
            }

            return view('searchLikesAndComments');
        }

        public function methodSearch(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            $username = $request->username;

            $query = User::where('username', $username)->get('id')->first();

            if(!$query){
                return array();
            }


            $userid = $query->id;

            $prova1 = User::join('likes', 'likes.user_id', '=', 'users.id')
                           ->where('users.id', $userid)
                           ->get(['likes.post_id']);

            $array1 = array();
            foreach($prova1 as $item){
                array_push($array1, $item->post_id);
            }

            $prova2 = User::join('comments', 'comments.user_id', '=', 'users.id')
                            ->where('users.id', $userid)
                            ->distinct()
                            ->get(['comments.post_id']);

            $array2 = array();
            foreach($prova2 as $item){
                array_push($array2, $item->post_id);
            }

            $query2 = Post::join('users', 'users.id', '=', 'posts.user_id')
                            ->whereIn('posts.id', $array1)
                            ->orwhereIn('posts.id', $array2)
                            ->get(['posts.id as id',
                                   'posts.text',
                                   'posts.time as time',
                                   'users.username as username']);


            return $query2;
        }

    }

?>
