<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    //fa riferimento alla tabella del database User(classe) --> users(tabella),
    // perché Laravel considera che ci sia nel database una tabella nominata al prurale minuscolo.
    class Post extends Model{
        protected $table = 'posts';

        protected $fillable = [
            'user_id', 'type', 'content'
        ];

        protected $casts = [
            'content' => 'array' 
        ];
        

        //belongsTo() su chi ha la foreign key, hasMany() su chi non ha la chiave esterna

        public function user(){
            return $this->belongsTo('App\Models\User'); // relazione => un post è creato da un singolo utente
        }

        public function comment(){
            return $this->hasMany('App\Models\Comment'); // relazione => un post può avere diversi commenti
        }

        public function like(){
            return $this->hasMany('App\Models\Like'); // relazione => un post può avere diversi like
        }

    }

?>