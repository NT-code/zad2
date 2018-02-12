<?php


class User implements \Serializable {
    public $name;
    public $email;
    public $password;
    
    function __construct(string $name, string $email, string $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function serialize() {
        return serialize([
            $this->name,
            $this->email,
            $this->password
        ]);
    }

    public function unserialize($serialized) {
        list(
            $this->name,
            $this->email,
            $this->password
        ) = unserialize($serialized);
    }

}

