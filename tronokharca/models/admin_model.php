<?php
class Admin_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function getAllUsers()
    {
        $sth = $this->db->prepare("SELECT * FROM `users` ");
        $sth->execute();
        $dashboardContent = $sth->fetchAll(PDO::FETCH_OBJ);
        return  $dashboardContent;
    }
    function getAllCommets()
    {
        $sth = $this->db->prepare("SELECT * FROM `contact`");
        $sth->execute();
        $dashboardContent = $sth->fetchAll(PDO::FETCH_OBJ);
        return  $dashboardContent;
    }

    function editUser()
    {

        $userData = array(
            ':id' => $_POST['id'],
            ':username' => $_POST['username'],
            ':admin' => ($_POST['admin'] == "on" ? '1' : '0'),
            ':email' => $_POST['email'],

        );



        $sql = "UPDATE `users` SET `userName`=:username,`email`=:email,`admin`= :admin WHERE `id`=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($userData);
        $count = $stmt->rowCount();

        if ($count > 0) {
            header('location: ../admin');
        }
    }

    function deleteUserById()
    {
        $userData = array(
            ':id' => $_POST['id']
        );
        //var_dump($userData);

        $sql = "DELETE FROM `users` WHERE `id` = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($userData);
        $count = $stmt->rowCount();

        if ($count > 0) {
            echo "success";
        }
    }
}
