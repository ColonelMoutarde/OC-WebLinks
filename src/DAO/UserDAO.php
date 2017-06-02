<?php

namespace WebLinks\DAO;

use WebLinks\Domain\User;

/**
 * Description of User
 *
 * @author luc
 */
class UserDAO extends DAO
{
    protected function buildDomainObject(array $row) {
        $user = (new User())
                ->setUserId($row['user_id'])
                ->setUserName($row['user_name'])
                ->setUserPassword($row['user_password'])
                ->setUserSalt($row['user_salt'])
                ->setUserRole($row['user_role'])
                ;
                
        return $user;
    }

}