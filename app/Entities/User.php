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
    public $id;

    /**
     * @Column(type="string", length=255)
     */
    public $name;
    /**
     * @Column(type="string", length=255)
     */
    public $lastName;

    /**
     * @Column(type="string", length=255, nullable=true)
     */
    public $nickName;

    /**
     * @Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    public $date_created;

}

