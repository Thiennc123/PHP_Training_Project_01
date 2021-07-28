<?php
session_start();
require_once('controllers/base_controller.php');
require_once('models/user.php');

class UserController extends BaseController
{
    function __construct()
    {
        $this->folder = 'admin';
    }



    public function showAdminUser()
    {
        if (!isset($_SESSION['name'])) {
            header('Location: index.php?controller=login&action=index');
        }
        $users = User::allAdmin();
        $data = array('users' => $users);
        $this->render('showListAdmin', $data);
    }


    public function showFormAddAdmin()
    {
        if (!isset($_SESSION['name'])) {
            header('Location: index.php?controller=login&action=index');
        }

        $this->render('addAdmin');
    }

    public function addAdmin()
    {
        echo "dsfds";
    }
}
