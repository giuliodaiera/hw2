<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    //fa riferimento alla tabella del database User(classe) --> users(tabella),
    // perché Laravel considera che ci sia nel database una tabella nominata al prurale minuscolo.
    class Like extends Model{
        protected $table = 'likes';

        protected $fillable = [
            'user_id', 'post_id'
        ];

        protected $casts = [ //converte i dati del database sia quando li leggiamo che quando li scriviamo in un certo formato
            'text' => 'array' 
        ];


        public function user(){
            return $this->belongsTo('App\Models\User'); // relazione => un like è creato da un singolo utente
        }

        public function post(){
            return $this->belongsTo('App\Models\Post'); // relazione => un like è in un post
        }

    }

?>