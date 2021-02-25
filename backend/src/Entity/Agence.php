<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgenceRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiSubresource;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      attributes={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"=" Seul l'admin Systeme peut avoir acces aux agences"            
 *      },
 *      collectionOperations={
 *              "GET"={
 *                      "method"="GET",
 *                      "path"="/agence"
 *                    },
 * 
 *              "POST"={
 *                      "method"="POST",
 *                      "path"="/agence"
 *                    },        
 * 
 *      },
 *      itemOperations={
 *              "GET"= {
 *                      "method"="GET",
 *                      "path"="agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *              "PUT"= {
 *                      "method"="PUT",
 *                      "path"="agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *              "DELETE"= {
 *                      "method"="DELETE",
 *                      "path"="agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *      },
 *      normalizationContext={"groups":{"agence:read"}} ,
 *      denormalizationContext={"groups":{"agence:write"}} ,
 *      
 * )
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"agence:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"agence:read","agence:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"agence:read","agence:write"})
     * 
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"agence:read","agence:write"})
     * 
     */
    private $telephone;

    /**
     * @ORM\OneToOne(targetEntity=Compte::class, inversedBy="agence", cascade={"persist", "remove"})
     * @Groups({"agence:read","agence:write"})
     * @ApiSubresource()
     * 
     */
    private $compte;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="agence", cascade={"persist", "remove"})
     * @Groups({"agence:read","agence:write"})
     */
    private $agent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isArchived = false;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        // $compte->setCreateAt(new \DateTime());
        $this->compte = $compte;

        return $this;
    }

    public function getAgent(): ?User
    {
        return $this->agent;
    }

    public function setAgent(?User $agent): self
    {
        $this->agent = $agent;

        return $this;
    }

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }
}
