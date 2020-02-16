<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("main")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("main")
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("main")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("main")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="articles")
     * @Groups("main")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="articles")
     * @Groups("main")
     */
    private $tags;



    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }






    public function getId(): ?int
    {
        return $this->id;
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }

        return $this;
    }

    public function removeAllTag(): self
    {
        $tags = $this->tags;
        foreach ($tags as $tag ){
            $this->tags->removeElement($tag);
        }
        return $this;
    }


}
