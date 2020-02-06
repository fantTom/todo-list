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
    private $id;

    /**
     * @Column(type="integer", nullable=true, name="task_id")
     * @ManyToOne(targetEntity="App\Entity\Task")
     * @JoinColumn(name="task_id", referencedColumnName="id")
     */
    private $task;

    /**
     * @Column(type="text", nullable=true)
     */
    private $text;

    /**
     * @Column(type="integer", nullable=true, name="autor_id")
     * @ManyToOne(targetEntity="App\Entity\User")
     * @JoinColumn(name="autor_id", referencedColumnName="id")
     */
    private $autor;

    /**
     * @Column(type="datetime", nullable=true)
     */
    public $date_created;


    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task): void
    {
        $this->task = $task;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

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
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @param mixed $date_created
     */
    public function setDateCreated($date_created): void
    {
        $this->date_created = $date_created;
    }


}