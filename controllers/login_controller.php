<?php
session_start();
require_once('controllers/base_controller.php');
require_once('models/user.php');

class LoginController extends BaseController
{
    function __construct()
    {
        $this->folder = 'login';
    }

    public function index()
    {

        $this->render('index');
    }

    public function login()
    {

        $username = isset($_POST["userName"]) ? $_POST["userName"] : '';
        $password = isset($_POST["passWord"]) ? $_POST["passWord"] : '';

        if ($username == '' || $password == '') {
            $data = array('alert' => 'Please fill all data !!!');
            $this->render('index', $data);
        } else {
            $user = User::find($username, $password);
            if (!isset($user)) {
                $data = array('alert' => 'Wrong input data');
                $this->render('index', $data);
            } else {
                $this->folder = 'mainpage';
                $data = array('user' => $user);
                $_SESSION['name'] = $user->name;
                $_SESSION['role'] = $user->role;

                header('Location: index.php?controller=user&action=showAdminUser');
            }
        }
    }


    public function logout()
    {

        if (!isset($_SESSION['name'])) {
            header('Location: index.php?controller=login&action=index');
        }

        if (isset($_SESSION['name'])) {
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            $this->render('index');
        }
    }
}
