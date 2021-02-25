<?php
// src/DataPersister/UserDataPersister.php

namespace App\DataPersister;

use App\Entity\CompteUser;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;


/**
 *
 */
class CompteUserDataPersister implements ContextAwareDataPersisterInterface
{
    private $_entityManager;
    private $_passwordEncoder;
    private $security;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordEncoderInterface $passwordEncoder,
        Security $security
    ) {
        $this->_entityManager = $entityManager;
        $this->_passwordEncoder = $passwordEncoder;
        $this->security = $security;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof CompteUser;
    }

    /**
     * @param CompteUser $data
     */
    public function persist($data, array $context = [])
    {
        // dd($data->getCompte()->getMontant());
        if ($data->getType() == false) {
            $data->getCompte()->setMontant($data->getCompte()->getMontant() + $data->getTransaction());
        } else {
            $data->getCompte()->setMontant($data->getCompte()->getMontant() - $data->getTransaction());
        }


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
