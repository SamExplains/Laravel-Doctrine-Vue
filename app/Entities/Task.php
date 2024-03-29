<?php

namespace DocVueTodoList\Entities ;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */
class Task
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   * */
  private $id;

  /**
   * @ORM\Column(type="string")
   * */
  private $name;

  /**
   * @ORM\Column(type="string")
   * */
  private $description;

  /**
   * @ORM\Column(type="boolean")
   * */
  private $isDone = false;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="tasks")
   * @var User
   */
  private $user;

  public function __construct($name, $description)
  {
    $this->name = $name;
    $this->description = $description;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function isDone()
  {
    return $this->isDone;
  }

  public function toggleStatus()
  {
    if(!$this->isDone) {
      $this->isDone = true;
    } else {
      $this->isDone = false;
    }
  }

  /**
   * @return User
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   * @param User $user
   */
  public function setUser(User $user)
  {
    $this->user = $user;
  }


}