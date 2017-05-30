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
        $user = (new User());
                
        return $user;
    }

}