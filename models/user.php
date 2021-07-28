<?php
class User
{
    public $id;
    public $name;
    public $avatar;
    public $password;
    public $role;

    function __construct($id, $password, $name, $avatar, $role)
    {
        $this->id = $id;
        $this->password = $password;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->role = $role;
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM users');

        foreach ($req->fetchAll() as $item) {
            $list[] = new User($item['id'], $item['password'], $item['name'], $item['avatar'], $item['role']);
        }

        return $list;
    }

    static function find($name, $password)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM users WHERE name = :name and password = :password');
        $req->execute(array('name' => $name, 'password' => $password));

        $item = $req->fetch();
        if (isset($item['name'])) {
            return new User($item['id'], $item['password'], $item['name'], $item['avatar'], $item['role']);
        }
        return null;
    }

    static function allAdmin()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM users Where role = 0');

        foreach ($req->fetchAll() as $item) {
            $list[] = new User($item['id'], $item['password'], $item['name'], $item['avatar'], $item['role']);
        }

        return $list;
    }

    static function addAdmin()
    {
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM users Where role = 0');
    }
}
