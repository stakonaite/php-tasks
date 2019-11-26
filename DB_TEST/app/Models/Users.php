<?php
/**
 * Created by PhpStorm.
 * User: tadaspetruskevicius
 * Date: 2019-11-13
 * Time: 11:49
 */

namespace user;
include_once 'Frame/Database.php';
include_once 'Tables.php';
include_once 'Forms.php';

use database\Database;
use datatable\Tables;
use form\Forms;

class Users extends Database
{
    public function getUsersData()
    {
        $db = New Database();
        $sql = "SELECT `user_name`, `user_email`, `user_psw`, `date` FROM `users`";
        $allUsersDateArray = $db->select($sql);

        $table = New Tables();
        $table->table($allUsersDateArray);
    }

    public function deleteUsersData()
    {
        $sql = "DELETE FROM `users` WHERE `user_email` = :user_email";
        $form = New Forms();
        $form->deleteForm();
        If (isset($_POST['delete'])) {
            $name = ['user_email' => $_POST['user_email']];
            $db = New Database();
            $db->deleteInsertEdit($sql, $name);
        }
    }

    public function insertEditUsersData()
    {
        $form = New Forms();
        $form->insertEditUserForm();
        If (isset($_POST['insert'])) {
            $sql = "INSERT INTO `users`(`user_name`, `user_email`, `user_psw`) VALUES (:name, :password, :email)";
            $name = [
                'name' => $_POST['user_name'],
                'password' => $_POST['user_psw'],
                'email' => $_POST['user_email']
            ];
            $db = New Database();
            $db->deleteInsertEdit($sql, $name);
        } elseif (isset($_POST['edit'])) {
            $sql = "UPDATE `users` SET `user_name` = :name, `user_psw` = :password, `user_email` = :email WHERE `user_email`= :user_email";
            $form = New Forms();
            $form->insertEditUserForm();

            if (isset($_POST['edit'])) {
                $name = [
                    'name' => $_POST['user_name'],
                    'password' => $_POST['user_psw'],
                    'email' => $_POST['user_email']
                ];
                $db = New Database();
                $db->deleteInsertEdit($sql, $name);
            }
        }
    }

    public function getAllUsersDatas()
    {
        $db = New Database();
        $sql = "SELECT `user_name`, `user_email`, `user_town`, `user_address` FROM `users`, `users_data` WHERE `user_email` = `user_email_address`";
        $allUsersDateArrays = $db->select($sql);

        $table = New Tables();
        $table->table($allUsersDateArrays);
    }
    public function editAllUsersDatas()
    {
        $form = New Forms();
        $form->insertEditUserForm();
        If (isset($_POST['edit'])) {
            $sql = "UPDATE `users`, `users_data` SET `user_name` = :name, user_email` = :email WHERE `user_email_address`= :user_email_address";
            $name = [
                'name' => $_POST['user_name'],
                'email' => $_POST['user_email'],
                'town' => $_POST['user_town'],
                'address' => $_POST['user_address'],
            ];
            $db = New Database();
            $db->deleteInsertEdit($sql, $name);
    }
}