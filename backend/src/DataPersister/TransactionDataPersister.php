<?php
// src/DataPersister/UserDataPersister.php

namespace App\DataPersister;

use App\Entity\Transaction;
use App\Services\TransactionServices;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
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

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordEncoderInterface $passwordEncoder,
        Security $security,
        TransactionServices $transactionservice
    ) {
        $this->_entityManager = $entityManager;
        $this->_passwordEncoder = $passwordEncoder;
        $this->security = $security;
        $this->transactionservice = $transactionservice;
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
        

        if ($data->getAgentDepot() === null) {
            $data->setCode("t-" . uniqid());
            $data->setAgentDepot($this->security->getUser());
            $data->setDateDepot(new \DateTime());
        } else {
            $data->setAgentRetrait($this->security->getUser());
            $data->setDateRetrait(new \DateTime());
            // dd($data->getClient()->getId());
        }

        $frais = $this->transactionservice->fraisEnvoi($data->getMontant());

        $data->setPartEtat($frais * 0.4);
        $data->setPartEnt($frais * 0.3);
        $data->setPartAgenceDepot($frais * 0.1);
        $data->setPartAgenceRetrait($frais * 0.2);

        // dd($data);
        // dd($data);

        // dd($data);

        // if ($data->getPlainPassword()) {
        //     $data->setPassword(
        //         $this->_passwordEncoder->encodePassword(
        //             $data,
        //             $data->getPlainPassword()
        //         )
        //     );
        //     // dd($data->getPassword());

        //     $data->eraseCredentials();
        // }


        $this->_entityManager->persist($data);
        $this->_entityManager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function remove($data, array $context = [])
    {
        // $data->setArchive(1);
        // $this->_entityManager->persist($data);
        // $this->_entityManager->flush();
        // $this->_entityManager->remove($data);
        // $this->_entityManager->flush();
    }
}
