<?php
class User
{
    private $host;
    private $username;
    private $password;
    private $db;
    private $mysqli;
    public function __construct()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db = 'accounts';
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->db) or die($this->mysqli->error);
    }
    // public static function logInUser($user, mysqli $conn)
    // {
    //     $query = "SELECT * FROM user WHERE username  = '$user->username' and password = '$user->password'";
    //     return $conn->query($query);
    }
    // public function login()
    // {
    //     $mail = $this->mysqli->escape_string($_POST['mail']);
    //     $result = $this->mysqli->query("SELECT * FROM users WHERE mail='$mail'");

    //     if($result->num_rows == 0)
    //     {
    //         $_SESSION['message'] = "User with that mail doesn't exist!";
    //         header("location: ../error.php");
    //     }
    //     else{
    //         $user = $result->fetch_assoc();
    //     }
    //     if(password_verify($_POST['password'], $users['password'])){
    //         $_SESSION['mail'] = $users['mail'];
    //         $_SESSION['active'] = $users['active'];

    //         $_SESSION['logged_in'] = true;

    //         header("location: ../home/index.php");
    //     }
    //     else{
    //         $_SESSION['message'] = "You have entered the wrong password";
    //         header("location: ../error.php");
    //     }
    // }
    // public function register(){
    //     $_SESSION['mail'] = $_POST['mail'];
    //     $_SESSION['username'] = $_POST['username'];

    //     $mail = $this->mysqli->escape_string($_POST['mail']);
    //     $username = $this->mysqli->escape_string($_POST['username']);
    //     $password = $this->mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
    //     $hash = $this->mysqli->escape-string(md5(rand(0,100)));

    //     $result = $this->mysqli->query("SELECT * FROM users WHERE mail = '$mail'");//OVDE JE BIO OR DIE

    //     if($result->num_rows>0){
    //         $_SESSION['message'] = 'User with this email already exists';
    //         header("location: ../error.php");
    //         exit;
    //     }
    //     else{
    //         $sql = "INSERT INTO users (mail, username, password, hash)"
    //         . "VALUES ('$mail, $username, $password, $hash)";

    //         if($this->mysqli->query($sql)){
    //             $_SESSION['active'] = 1;
    //             $_SESSION['logged_in'] = true;
    //             $_SESSION['message'] = 'You have registered successfully!';

    //             header("location: ../success.php");
    //         }
    //         else{
    //             $_SESSION['message'] = 'Registration failed :(';
    //             header("location: ../error.php");
    //         }
    //     }
    // }
}