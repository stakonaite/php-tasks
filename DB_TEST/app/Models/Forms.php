<?php

namespace form;

class Forms
{
    public function deleteForm()
    {
        print "
            <form method='post'>
                <input type='text' placeholder='email' name='user_email'>
                <input type='submit' value='Delete' name='delete'>
            </form>
        ";
    }
    public function insertEditUserForm(){
        print "
            <form method='post'>
                <input type='text' placeholder='user name' name='user_name'>
                <input type='email' placeholder='e-mail' name='user_email'>
                <input type='password' placeholder='password' name='user_psw'>
                <input type='submit' value='Insert' name='insert'>
                <input type='submit' value='Edit' name='edit'>
            </form>
        ";
    }
}