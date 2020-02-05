<?php

namespace App\Entities;

/**
 * @ORM\Entity()
 * @ORM\Table(name="statuses")
 */
class Status
{

    /**
     * @Id
     * @Column(type="integer" name="id")
     * @GeneratedValue
     */
    private $id;


    public function getId()
    {
        return $this->id;
    }


    /**
     * @Column(type="string", name="title_status" length=255)
     */
    public $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @Column(type="boolean" options={"default": true})
     */
    public $activity;

    public function getStatus()
    {
        return $this->activity;
    }

    public function setStatus($activity)
    {
        $this->activity = $activity;
    }

    /**
     * @Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $date_created;


    public function getDateCreated()
    {
        return $this->date_created;
    }


}

