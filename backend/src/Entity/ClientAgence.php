<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientAgenceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ApiResource(
 *     
 *      collectionOperations={
 *              "GET"={
 *                      "method"="GET",
 *                      "path"="client-agence"
 *                    },
 * 
 *              "POST"={
 *                      "method"="POST",
 *                      "path"="client-agence"
 *                    },        
 * 
 *      },
 *      itemOperations={
 *              "GET"= {
 *                      "method"="GET",
 *                      "path"="client-agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *              "PUT"= {
 *                      "method"="PUT",
 *                      "path"="client-agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              }, 
 *              "DELETE"= {
 *                      "method"="DELETE",
 *                      "path"="client-agence/{id}",
 *                      "requirements"={"id"="\d+"}
 *              }, 
 *              "get_client_by_user"={
 *                      "method"="GET",
 *                      "path"="client-agence/user/{id}",
 *                      "controller" =  ClientAgenceController::class
 *                    }
 *      },
 *      normalizationContext={"groups":{"client-agence:read"}} ,
 *      denormalizationContext={"groups":{"client-agence:write"}} ,
 * )
 * @ORM\Entity(repositoryClass=ClientAgenceRepository::class)
 */
class ClientAgence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"client-agence:read"})
     * 
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @Groups({"client-agence:read"})
     * 
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class)
     * @Groups({"client-agence:read"})
     * 
     */
    private $agence;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"client-agence:read","client-agence:write"})
     * 
     */
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
