<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    //fa riferimento alla tabella del database User(classe) --> users(tabella),
    // perché Laravel considera che ci sia nel database una tabella nominata al prurale minuscolo.
    class User extends Model{
        protected $hidden = ['password'];

        protected $fillable = [
            'username', 'password', 'email', 'name', 'surname'
        ];
        
        public function posts(){
            return $this->hasMany('App\Models\Post'); //si restituisce l'uscita del metodo che rappresenta la relazione chiamato sull'oggetto attuale
        }

        public function comments(){
            return $this->hasMany('App\Models\Comment'); //
        }

        public function likes(){
            return $this->hasMany('App\Models\Like'); //
        }

    }

?>
