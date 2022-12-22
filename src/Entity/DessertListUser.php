<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DessertListUserRepository::class)
 */
class DessertListUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Length(min=3)
     * @Assert\Length(max=255)
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="dessertList")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @ORM\OneToMany(targetEntity=DessertUser::class, mappedBy="idDessertListUser")
     */
    private $desserts;

    /**
     * @ORM\OneToMany(targetEntity=DessertUser::class, mappedBy="dessertList")
     */
    private $idDessertList;

    public function __construct()
    {
        $this->desserts = new ArrayCollection();
        $this->idDessertList = new ArrayCollection();
    }

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

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * @return Collection<int, DessertUser>
     */
    public function getDesserts(): Collection
    {
        return $this->desserts;
    }

    public function addDessert(DessertUser $dessert): self
    {
        if (!$this->desserts->contains($dessert)) {
            $this->desserts[] = $dessert;
            $dessert->setIdDessertListUser($this);
        }

        return $this;
    }

    public function removeDessert(DessertUser $dessert): self
    {
        if ($this->desserts->removeElement($dessert)) {
            // set the owning side to null (unless already changed)
            if ($dessert->getIdDessertListUser() === $this) {
                $dessert->setIdDessertListUser(null);
            }
        }

        return $this;
    }

}
