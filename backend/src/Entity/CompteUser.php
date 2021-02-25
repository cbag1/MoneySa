<?php

namespace App\Entity;

use App\Repository\CompteUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 * attributes={
 *              "security"="is_granted('ROLE_CAISSIER')",
 *              "security_message"=" Seul le caissier peut avoir acces aux transaction d'une compte"            
 *      },
 *      collectionOperations={
 *              "GET"={
 *                      "method"="GET",
 *                      "path"="/transactioncompte"
 *                    },
 * 
 *              "POST"={
 *                      "method"="POST",
 *                      "path"="/transactioncompte"
 *                    },        
 * 
 *      },
 *      itemOperations={
 *              "GET"= {
 *                      "method"="GET",
 *                      "path"="transactioncompte/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *              "PUT"= {
 *                      "method"="PUT",
 *                      "path"="transactioncompte/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *      },
 *      normalizationContext={"groups":{"transactioncompte:read"}} ,
 *      denormalizationContext={"groups":{"transactioncompte:write"}} ,
 * )
 * @ORM\Entity(repositoryClass=CompteUserRepository::class)
 */
class CompteUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"transactioncompte:read","transactioncompte:write"})
     */
    private $transaction;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"transactioncompte:read","transactioncompte:write"})
     * 
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @Groups({"transactioncompte:read","transactioncompte:write"})
     * 
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class)
     * @Groups({"transactioncompte:read","transactioncompte:write"})
     * 
     */
    private $compte;

   
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransaction(): ?int
    {
        return $this->transaction;
    }

    public function setTransaction(?int $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(?bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

 


 
}
