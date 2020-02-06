<?php

namespace App\Entities;


/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string", length=255)
     */
    private $name;
    /**
     * @Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @Column(type="string", length=255, nullable=true)
     */
    private $nickName;
    /**
     * @Column(type="datetime", nullable=true)
     */
    public $date_created;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * @param mixed $nickName
     */
    public function setNickName($nickName): void
    {
        $this->nickName = $nickName;
    }

}

