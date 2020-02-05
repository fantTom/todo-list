<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="tasks")
 */
class Task
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    public $id;

    /**
     * @Column(nullable=true)
     */
    public $title;

    /**
     * @Column(type="text", nullable=true)
     */
    public $description;

    /**
     *  @Column(type="integer", nullable=true, name="status_id")
     *  @ManyToOne(targetEntity="App\Entity\Status")
     *  @JoinColumn(name="status_id", referencedColumnName="id")
     */
    public $status;

    /**
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    public $date_created;



}