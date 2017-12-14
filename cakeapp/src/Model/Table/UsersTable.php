<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('first_name', 'Enter your first name')
            ->notEmpty('last_name', 'Enter your last name')
            ->notEmpty('email', 'Enter your email')
            ->add('email', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => 'Your email has already been registered.']
            ])
            ->notEmpty('password', 'Enter a password')
            ->sameAs('confirm_password', 'password', 'Passwords don\'t match.')
            ->notEmpty('birth_date', 'Enter your birth date')
            ->add('birth_date', [
                 'custom'=>[
                     'rule' => [$this, 'checkDOB'],
                     'message' => 'Birth date can\'t be in the future.'
                 ]
            ]);
    }

    public function checkDOB($value)
    {
        return $value < date('Y-m-d');
    }
}