<?php

namespace Joki\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
     */
    protected $posts;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Post;


    /**
     * Add Post
     *
     * @param \Joki\BlogBundle\Entity\Post $post
     * @return Category
     */
    public function addPost(\Joki\BlogBundle\Entity\Post $post)
    {
        $this->Post[] = $post;

        return $this;
    }

    /**
     * Remove Post
     *
     * @param \Joki\BlogBundle\Entity\Post $post
     */
    public function removePost(\Joki\BlogBundle\Entity\Post $post)
    {
        $this->Post->removeElement($post);
    }

    /**
     * Get Post
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPost()
    {
        return $this->Post;
    }
}
