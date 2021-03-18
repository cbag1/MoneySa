<?php
// src/DataPersister/UserDataPersister.php

namespace App\DataPersister;

use App\Entity\Transaction;
use App\Services\TransactionServices;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Repository\AgenceRepository;
use App\Repository\ClientAgenceRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;


/**
 *
 */
class TransactionDataPersister implements ContextAwareDataPersisterInterface
{
    private $_entityManager;
    private $_passwordEncoder;
    private $security;
    private $transactionservice;
    private $agences;
    private $clientagence;
    private $compteagence;


    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordEncoderInterface $passwordEncoder,
        Security $security,
        TransactionServices $transactionservice,
        AgenceRepository $agence,
        ClientAgenceRepository $clientagence
    ) {
        $this->_entityManager = $entityManager;
        $this->_passwordEncoder = $passwordEncoder;
        $this->security = $security;
        $this->transactionservice = $transactionservice;
        $this->agences = $agence;
        $this->clientagence = $clientagence;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof Transaction;
    }

    /**
     * @param Transaction $data
     */
    public function persist($data, array $context = [])
    {

        // dd($data);

        $ag = $this->agences->findByAgent($this->security->getUser());

        $i = true;
        if ($ag == null) {
            $ag = $this->clientagence->findByUser($this->security->getUser());
            $agence = $ag[0];
            $i = false;
            // $compteagence->setMontant(22000);
            // $this->compteagence = $this->compteagence->getAgence()->getCompte();
            // dd($this->compteagence);

            // dd($compteagence->getMontant(    ));
            // dd("ici");
            // dd($this->compteagence);
        } {
            // $this->compteagence =$ag[0]->getCompte();
            // dd("ici aussi");
            $this->compteagence = $ag[0];
            // dd($this->compteagence);
        }
        if ($i) {
            $this->compteagence = $ag[0]->getCompte();
        } else {
            $this->compteagence = $agence->getAgence()->getCompte();
        }

        // dd($this->compteagence);

        if ($data->getAgentDepot() === null) {
            $data->setCode("t-" . uniqid());
            $data->setAgentDepot($this->security->getUser());
            $data->setDateDepot(new \DateTime());
            $this->compteagence->setMontant($this->compteagence->getMontant() + $data->getMontant());
            $sms = $this->transactionservice->envoiesms($data->getClient()->getTelBeneficiaire(), $data->getMontant(), $data->getCode(), $data->getClient()->getNomClient());
        } else {
            $data->setValide(1);
            $data->setAgentRetrait($this->security->getUser());
            $data->setDateRetrait(new \DateTime());
            $this->compteagence->setMontant($this->compteagence->getMontant() - $data->getMontant());
        }

        $frais = $this->transactionservice->fraisEnvoi($data->getMontant());

        $data->setPartEtat($frais * 0.4);
        $data->setPartEnt($frais * 0.3);
        $data->setPartAgenceDepot($frais * 0.1);
        $data->setPartAgenceRetrait($frais * 0.2);

        // dd($data);



        $this->_entityManager->persist($data);
        $this->_entityManager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function remove($data, array $context = [])
    {
        $data->setValide(2);
        $this->_entityManager->persist($data);
        $this->_entityManager->flush();
        // $this->_entityManager->remove($data);
        // $this->_entityManager->flush();
    }
}
