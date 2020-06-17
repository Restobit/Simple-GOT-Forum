<?php

class Registration_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function process()
    {
        $data = [
            ':username' => $_POST['username'],
            ':password' => $_POST['password'],
            ':email' => $_POST['email']
        ];

        $sql = "INSERT INTO `users`(`userName`, `password`, `email`) VALUES (:username,MD5(:password),:email)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
        $count = $stmt->rowCount();

        return $count > 0 ? "success" : "not_success";
    }
}
