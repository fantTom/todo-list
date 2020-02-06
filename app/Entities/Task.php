<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
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
    private $id;

    /**
     * @Column(nullable=true)
     */
    private $title;

    /**
     * @Column(type="text", nullable=true)
     */
    private $description;

    /**
     *  @Column(type="integer", nullable=true, name="status_id")
     *  @ManyToOne(targetEntity="App\Entity\Status")
     *  @JoinColumn(name="status_id", referencedColumnName="id")
     */
    private $status;

    /**
     *  @Column(type="integer", nullable=true, name="autor_id")
     *  @ManyToOne(targetEntity="App\Entity\User")
     *  @JoinColumn(name="autor_id", referencedColumnName="id")
     */
    private $autor;

    /**
     * @Column(type="datetime")
     */
    private $date_created;

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
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function toApi(){
       return [
            'title'=>$this->title,
            'description'=>$this->description
        ];

    }


}