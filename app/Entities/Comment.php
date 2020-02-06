<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="comments")
 */
class Comment
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    public $id;

    /**
     * @Column(type="integer", nullable=true, name="task_id")
     * @ManyToOne(targetEntity="App\Entity\Task")
     * @JoinColumn(name="task_id", referencedColumnName="id")
     */
    public $task;

    /**
     * @Column(type="text", nullable=true)
     */
    public $text;


    /**
     *  @Column(type="integer", nullable=true, name="autor_id")
     *  @ManyToOne(targetEntity="App\Entity\User")
     *  @JoinColumn(name="autor_id", referencedColumnName="id")
     */
    public $autor;

    /**
     * @Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    public $date_created;


}