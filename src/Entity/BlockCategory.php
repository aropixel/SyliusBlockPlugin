<?php

namespace  Aropixel\SyliusBlockPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;

class BlockCategory implements BlockCategoryInterface, ResourceInterface
{
    private $id;

    private $title;

    private $blocks;

    private $createdAt;

    private $enabled;

    public function __construct()
    {
        $this->blocks = new ArrayCollection();
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

    /**
     * @return Collection|Block]
     */
    public function getBlock(): Collection
    {
        return $this->blocks;
    }

    public function addBlock($block): self
    {
        if (!$this->blocks->contains($block)) {
            $this->blocks[] = $block;
            $block->setCategory($this);
        }

        return $this;
    }

    public function removeBlock($block): self
    {
        if ($this->blocks->removeElement($block)) {
            // set the owning side to null (unless already changed)
            if ($block->getCategory() === $this) {
                $block->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled): void
    {
        $this->enabled = $enabled;
    }
}
