<?php
class User extends AppModel
{
    public $validate = array(

        'username' => array(
            'rule' => 'alphaNumeric'
        ),
        'password' => array(
            'rule' => array('minLength',8),
            'message' => 'Hasło musi mieć minimum 8 znaków'
        )

    );
}
?>