<?php

require_once '../includes/config.php';

class User {

    public $memberID;
    public $username;
    public $hashedPassword;
    public $email;

    // Конструктор вызывается при создании нового объекта
    // Takes an associative array with the DB row as an argument.

    function __construct($data) {
        $this->memberID = (isset($data['memberID'])) ? $data['memberID'] : "";
        $this->username = (isset($data['username'])) ? $data['username'] : "";
        $this->hashedPassword = (isset($data['password'])) ? $data['password'] : "";
        $this->email = (isset($data['email'])) ? $data['email'] : "";
        
    }

    public function save($isNewUser = false) {
        
        //if the user is already registered and we're
        //just updating their info.

        if(!$isNewUser) {
            //set the data array
            $data = array(
                "username" => "'$this->username'",
                "password" => "'$this->hashedPassword'",
                "email" => "'$this->email'"
        );

        //update the row in the database
        $db->update($data, 'blog_members', 'memberID = '.$this->memberID);
        
        } else {

            //if the user is being registered for the first time.
            $data = array(
                "username" => "'$this->username'",
                "password" => "'$this->hashedPassword'",
                "email" => "'$this->email'",
                
            );

            $this->memberID = $db->insert($data, 'blog_members');
            
            }

        return true;
    }

}