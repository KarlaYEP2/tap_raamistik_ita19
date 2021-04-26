<?php


class Page
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Databases();
    }
    public function addUser(){
        $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
        $this->db->bind('name', 'user1');
        $this->db->bind('email', 'user@localhost.loc');
        $this->db->bind('status', 'user');
        $this->db->execute();
    }
    public function getOneUser(){
        $this->db->query('SELECT * FROM users WHERE id=:id');
        $this->db->bind('id', 1);
        return $this->db->getOne();
    }
}