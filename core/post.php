<?php

    class Post{

        //db stuff
        private $conn;
        private $table='posts';

        //post properties
        public $id;
        public $category_id;
        public $category_name;
        public $title;
        public $body;
        public $author;
        public $created_at;

        //constructor with db connection
        public function __construct($db){
            $this->conn= $db;        
        }

        //getting posts from db
        public function read(){

            //create query
            $query = 'SELECT 
            c.name as category_name, p.id, p.title, p.body, p.author, p.created_at 
            FROM posts p LEFT JOIN category c 
            ON p.category_id = c.id 
            ORDER BY p.created_at DESC';

            //prepare statment 
            $stmt = $this->conn->prepare('SELECT 
            c.name as category_name, p.id, p.title, p.body, p.author, p.created_at 
            FROM posts p LEFT JOIN category c 
            ON p.category_id = c.id 
            ORDER BY p.created_at DESC');

            //execute query
            $stmt->execute();
            
            return $stmt;
        }
    }
