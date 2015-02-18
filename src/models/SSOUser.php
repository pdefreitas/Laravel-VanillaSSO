<?php
/**
 * This file is part of Laravel-VanillaSSO for jsConnect
 * @author pdefreitas <pdefreitas@users.noreply.github.com>
 * @license GPLv2
 */

class SSOUser {
    public $id;
    public $name;
    public $email;
    public $roles;
    public $profilepicture;

    function __construct()
    {
        $this->email          = null;
        $this->id             = null;
        $this->name           = null;
        $this->roles          = null;
        $this->profilepicture = "";
    }

    /**
     * @return array
     */
    function toArray() {
        return array(
            "uniqueid" => $this->id,
            "name"     => $this->name,
            "email"    => $this->email,
            "roles"    => $this->roles,
            "photourl" => $this->profilepicture
        );
    }
}