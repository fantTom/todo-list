<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;

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


}

