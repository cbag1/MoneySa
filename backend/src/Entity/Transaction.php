<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ApiResource(
 * 
 *      collectionOperations={
 *              "GET"={
 *                      "method"="GET",
 *                      "path"="/transaction"
 *                    },
 * 
 *              "POST"={
 *                      "method"="POST",
 *                      "path"="/transaction"
 *                    },        
 * 
 *      },
 *      itemOperations={
 *              "GET"= {
 *                      "method"="GET",
 *                      "path"="transaction/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },
 *              "PUT"= {
 *                      "method"="PUT",
 *                      "path"="transaction/{id}",
 *                      "requirements"={"id"="\d+"}
 *              }, 
 *              "DELETE"= {
 *                      "method"="DELETE",
 *                      "path"="transaction/{id}",
 *                      "requirements"={"id"="\d+"}
 *              },   
 *              "get_transaction"={
 *                      "method"="GET",
 *                      "path"="transaction/code/{code}",
 *                      "controller" = TransactionController::class,
 *                      "defaults"={"identifiedBy"="code"}
 *                    },
 *              "get_transaction_by_user"={
 *                      "method"="GET",
 *                      "path"="/transaction/agent/{id}",
 *                      "controller" =  TransactionController::class
 *                    }
 *      },
 *      normalizationContext={"groups":{"transaction:read"}} ,
 *      denormalizationContext={"groups":{"transaction:write"}} ,
 *     
 * )
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read"})
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"transaction:read","transaction:write"})
     */
    private $code;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Groups({"transaction:read","transaction:write"})
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $dateDepot;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"transaction:read","transaction:write"})
     */
    private $dateRetrait;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $partEtat = 0;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $partEnt = 0;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $partAgenceRetrait = 0;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $partAgenceDepot = 0;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transactions")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $agentDepot;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transactions")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $agentRetrait;

    /**
     * @ORM\OneToOne(targetEntity=Client::class, inversedBy="transaction", cascade={"persist", "remove"})
     * @Groups({"transaction:read","transaction:write"})
     */
    private $client;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transaction:read","transaction:write"})
     */
    private $valide = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getPartEtat(): ?int
    {
        return $this->partEtat;
    }

    public function setPartEtat(int $partEtat): self
    {
        $this->partEtat = $partEtat;

        return $this;
    }

    public function getPartEnt(): ?int
    {
        return $this->partEnt;
    }

    public function setPartEnt(int $partEnt): self
    {
        $this->partEnt = $partEnt;

        return $this;
    }

    public function getPartAgenceRetrait(): ?int
    {
        return $this->partAgenceRetrait;
    }

    public function setPartAgenceRetrait(int $partAgenceRetrait): self
    {
        $this->partAgenceRetrait = $partAgenceRetrait;

        return $this;
    }

    public function getPartAgenceDepot(): ?int
    {
        return $this->partAgenceDepot;
    }

    public function setPartAgenceDepot(int $partAgenceDepot): self
    {
        $this->partAgenceDepot = $partAgenceDepot;

        return $this;
    }



    public function getAgentDepot(): ?User
    {
        return $this->agentDepot;
    }

    public function setAgentDepot(?User $agentDepot): self
    {
        $this->agentDepot = $agentDepot;

        return $this;
    }

    public function getAgentRetrait(): ?User
    {
        return $this->agentRetrait;
    }

    public function setAgentRetrait(?User $agentRetrait): self
    {
        $this->agentRetrait = $agentRetrait;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getValide(): ?int
    {
        return $this->valide;
    }

    public function setValide(int $valide): self
    {
        $this->valide = $valide;

        return $this;
    }


}
