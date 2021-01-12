<?php

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="posts", cascade={"persist"})
     * @var ArrayCollection|Post[]
     */
    protected $posts;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;

        $this->posts = new ArrayCollection;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Post $post
     */
    public function addPost(Post $post)
    {
        if(!$this->posts->contains($post)) {
            $post->setUser($this);
            $this->posts->add($post);
        }
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
