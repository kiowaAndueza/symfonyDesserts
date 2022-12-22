<?php

namespace App\Entity;

use App\Repository\DessertUserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DessertUserRepository::class)
 */
class DessertUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(groups={"newDessertUser"})
     * @Assert\Length(min=3, groups={"newDessertUser"})
     * @Assert\Length(max=25, groups={"newDessertUser"})
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\NotNull(groups={"newDessertUser"})
     * @Assert\Range(
     *      min = 0.1,
     *      notInRangeMessage = "You must be {{ min }} minimum.",
     *      groups={"newDessertUser"}
     * )
     * 
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @Assert\NotBlank(groups={"newDessertUser"})
     * @Assert\Length(min=1, groups={"newDessertUser"})
     * @Assert\Length(max=300, groups={"newDessertUser"})
     * 
     * @ORM\Column(type="string", length=300)
     */
    private $description;

    /**
     * @Assert\Length(max=600, groups={"newDessertUser"})
     * 
     * @ORM\Column(type="string", length=600, nullable=true)
     */
    private $img;

    /**
     * @Assert\NotNull(groups={"newDessertUser"})
     * @Assert\Range(
     *      min = 1,
     *      notInRangeMessage = "You must be {{ min }} minimum.",
     *      groups={"newDessertUser"}
     * )
     * 
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * 
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="desserts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @Assert\NotNull(groups={"newDessertUser"})
     * 
     * @ORM\ManyToOne(targetEntity=DessertListUser::class, inversedBy="desserts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idDessertListUser;
    

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

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdDessertListUser(): ?DessertListUser
    {
        return $this->idDessertListUser;
    }

    public function setIdDessertListUser(?DessertListUser $idDessertListUser): self
    {
        $this->idDessertListUser = $idDessertListUser;

        return $this;
    }
}
