<?php

    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    use App\Models\User;

    class RegisterController extends BaseController
    {


        public function view() {
            return view('register')
            ->with('csrf_token', csrf_token());
        } 


        protected function create(Request $request)
        {

            $errors = array();

            $name = $request->name;
            $surname = $request->surname;
            $username = $request->username;
            $email = $request->email;
            $password = $request->password;
            $confirm_password = $request->confirm_password;  

            if(empty($name))
            {
                array_push($errors, "Name is required");
            }
    
            if(empty($surname))
            {
                array_push($errors, "Surname is required");
            }
    
            if(empty($username))
            {
                array_push($errors, "Username is required");
            }
    
            if(empty($email))
            {
                array_push($errors, "Email is required");
            }
    
            if(empty($password))
            {
                array_push($errors, "Password is required");
            }
    
            if($password !== $confirm_password){
                array_push($errors, "The two passwords do not match");
            }

            if(count($errors) > 0){
                return;
            }

            $user = User::where('username', $username)->where('password', $password)->first();

            if ($user != null) { // if user exists
                if ($user->username === $username) {
                    array_push($errors, "Username already exists");
                }
            
                if ($user->email === $email) {
                    array_push($errors, "email already exists");
                }
            }

            if(count($errors) === 0)
            {
                //criptare la password prima di salvarla nel database
                $password_criptata = password_hash($password, PASSWORD_BCRYPT);

                //inserisce nella tabella users
                $new_user = new User;
                $new_user->name = $name;
                $new_user->surname = $surname;
                $new_user->username = $username;
                $new_user->email = $email;
                $new_user->password = $password_criptata;
                $new_user->save();   

                if($new_user){
                    Session::put('user_id', $new_user->id);
                    return redirect('home');
                }else{
                    return redirect('registerView')->withInput();
                }

            } else{
                return redirect('registerView')->withInput();
            }
        }
        

        public function checkUsername($query) {
            $exist = User::where('username', $query)->exists();
            return ['exists' => $exist];
        }

        public function checkEmail($query) {
            $exist = User::where('email', $query)->exists();
            return ['exists' => $exist];
        }

    }

?>