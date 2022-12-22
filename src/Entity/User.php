<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Controller\SecurityController;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * 
     * @Assert\Regex(
     * pattern="/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/",
     * message="not_valid_email",
     * groups={"registration"}
     * )
     * 
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     *
     * @Assert\NotBlank(groups={"registration"})
     * @Assert\Length(min=4, groups={"registration"})
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    private $apiToken;

    /**
     * @ORM\OneToMany(targetEntity=DessertListUser::class, mappedBy="idUser")
     */
    private $dessertList;

    /**
     * @ORM\OneToMany(targetEntity=DessertUser::class, mappedBy="idUser")
     */
    private $desserts;

    public function __construct($id = null, $email = null, $password = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->desserts = new ArrayCollection();
        $this->dessertList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(?string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * @return Collection<int, DessertListUser>
     */
    public function getDessertList(): Collection
    {
        return $this->dessertList;
    }

    public function addDessertList(DessertListUser $dessertList): self
    {
        if (!$this->dessertList->contains($dessertList)) {
            $this->dessertList[] = $dessertList;
            $dessertList->setIdUser($this);
        }

        return $this;
    }

    public function removeDessertList(DessertListUser $dessertList): self
    {
        if ($this->dessertList->removeElement($dessertList)) {
            // set the owning side to null (unless already changed)
            if ($dessertList->getIdUser() === $this) {
                $dessertList->setIdUser(null);
            }
        }

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
            $dessert->setIdUser($this);
        }

        return $this;
    }

    public function removeDessert(DessertUser $dessert): self
    {
        if ($this->desserts->removeElement($dessert)) {
            // set the owning side to null (unless already changed)
            if ($dessert->getIdUser() === $this) {
                $dessert->setIdUser(null);
            }
        }

        return $this;
    }
}
