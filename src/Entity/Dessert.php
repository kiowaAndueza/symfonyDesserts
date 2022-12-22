<?php

namespace App\Entity;

use App\Repository\DessertRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DessertRepository::class)
 */
class Dessert
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(groups={"newDessert"})
     * @Assert\Length(min=3, groups={"newDessert"})
     * @Assert\Length(max=25, groups={"newDessert"})
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\NotNull(groups={"newDessert"})
     * @Assert\Range(
     *      min = 0.1,
     *      notInRangeMessage = "You must be {{ min }} minimum.",
     *      groups={"newDessert"}
     * )
     *
     * 
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @Assert\NotBlank(groups={"newDessert"})
     * @Assert\Length(min=1, groups={"newDessert"})
     * @Assert\Length(max=300, groups={"newDessert"})
     * 
     * @ORM\Column(type="string", length=300)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=600, nullable=true)
     */
    private $img;

    /**
     * @Assert\NotNull(groups={"newDessert"})
     * @Assert\Range(
     *      min = 1,
     *      notInRangeMessage = "You must be {{ min }} minimum.",
     *      groups={"newDessert"}
     * )
     * 
     * @ORM\Column(type="integer")
     * 
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
