<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="statuses")
 */
class Status
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="title_status")
     */
    private $title;

    /**
     * @Column(type="boolean", nullable=true)
     */
    private $activity;

    /**
     * @Column(type="datetime", nullable=true)
     */
    public $date_created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param mixed $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }



}

