<?php

    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;

    use App\Models\User;
    use App\Models\Post;
    use App\Models\Comment;

    class CommentsController extends BaseController
    {

        #add_comments
        public function methodAddComment(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            $user_id = User::find(session('user_id'));
            $post_id = $request->postid;
            $text = $request->text;

            //inserisce nella tabella likes
            $comment = new Comment;
            $comment->user_id = $user_id->id;
            $comment->post_id = $post_id;
            $comment->text = $text;
            $comment->save();   

            $post = Post::find($post_id);

            return response()->json([
                'ncomments' => $post->ncomments,
                'postid' => $post->id,
                'text' => $post->text
            ]);
        }



        #comments
        public function methodComment(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            $post_id = $request->postid;

            $comments = Comment::join('users', 'users.id', '=', 'comments.user_id')
                                 ->where('comments.post_id', $post_id)
                                 ->orderBy('comments.time')
                                 ->get(['comments.id as id',
                                       'comments.post_id as postid',
                                       'users.username as username',
                                       'comments.text as text',
                                       'comments.time as time']);                                        


            return $comments;                     

        }

        
        #num_comments
        public function methodNumComment(Request $request){
            if(session('user_id') == null ){
                return redirect('login');
            }

            $post_id = $request->postid;

            $comments = Post::find($post_id);

            return response()->json([
                'postid' => $post_id,
                'ncomments' => $comments->ncomments
            ]); 
        }

    }

?>
