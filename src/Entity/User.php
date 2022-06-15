<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcarte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cartenombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $expiremois;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $expireannee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cvv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroadresse;

    /**
     * @ORM\ManyToMany(targetEntity=Prestations::class, inversedBy="users")
     */
    private $prestationsid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option4;

    public function __construct()
    {
        $this->prestationsid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNomcarte(): ?string
    {
        return $this->nomcarte;
    }

    public function setNomcarte(string $nomcarte): self
    {
        $this->nomcarte = $nomcarte;

        return $this;
    }

    public function getCartenombre(): ?string
    {
        return $this->cartenombre;
    }

    public function setCartenombre(string $cartenombre): self
    {
        $this->cartenombre = $cartenombre;

        return $this;
    }

    public function getExpiremois(): ?string
    {
        return $this->expiremois;
    }

    public function setExpiremois(string $expiremois): self
    {
        $this->expiremois = $expiremois;

        return $this;
    }

    public function getExpireannee(): ?string
    {
        return $this->expireannee;
    }

    public function setExpireannee(string $expireannee): self
    {
        $this->expireannee = $expireannee;

        return $this;
    }

    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getNumeroadresse(): ?string
    {
        return $this->numeroadresse;
    }

    public function setNumeroadresse(string $numeroadresse): self
    {
        $this->numeroadresse = $numeroadresse;

        return $this;
    }

    /**
     * @return Collection<int, Prestations>
     */
    public function getPrestationsid(): Collection
    {
        return $this->prestationsid;
    }

    public function addPrestationsid(Prestations $prestationsid): self
    {
        if (!$this->prestationsid->contains($prestationsid)) {
            $this->prestationsid[] = $prestationsid;
        }

        return $this;
    }

    public function removePrestationsid(Prestations $prestationsid): self
    {
        $this->prestationsid->removeElement($prestationsid);

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getOption1(): ?string
    {
        return $this->option1;
    }

    public function setOption1(string $option1): self
    {
        $this->option1 = $option1;

        return $this;
    }

    public function getOption2(): ?string
    {
        return $this->option2;
    }

    public function setOption2(string $option2): self
    {
        $this->option2 = $option2;

        return $this;
    }

    public function getOption3(): ?string
    {
        return $this->option3;
    }

    public function setOption3(string $option3): self
    {
        $this->option3 = $option3;

        return $this;
    }

    public function getOption4(): ?string
    {
        return $this->option4;
    }

    public function setOption4(string $option4): self
    {
        $this->option4 = $option4;

        return $this;
    }
}