<?php
// src/DataPersister/UserDataPersister.php

namespace App\DataPersister;

use App\Entity\Agence;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompteRepository;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\Compte;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;


/**
 *
 */
class AgenceDataPersister implements ContextAwareDataPersisterInterface
{
    private $_entityManager;
    private $_passwordEncoder;
    private $security;
    private $repo_compte;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordEncoderInterface $passwordEncoder,
        Security $security,
        CompteRepository $repo_compte
    ) {
        $this->_entityManager = $entityManager;
        $this->_passwordEncoder = $passwordEncoder;
        $this->security = $security;
        $this->repo_compte = $repo_compte->findAll();
    }

    /**
     * {@inheritdoc}
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof Agence;
    }

    /**
     * @param Agence $data
     */
    public function persist($data, array $context = [])
    {
        // $number = count($this->repo_compte)+1;
        // $length = 5;
        // $string = substr(str_repeat(0, $length) . $number, -$length);
        // dd($string);

        if ($data->getCompte() === null) {
            $compte = new Compte();
            $compte->setCode("c-" . uniqid());
            $compte->setCreateAt(new \DateTime());
            $compte->setMontant(700000);
            $data->setCompte($compte);
        }

        // $data->getCompte()->setCode("c-".uniqid());
        // $data->getCompte()->setCreateAt(new \DateTime());
        // $data->getCompte()->setMontant(700000);
        // $data->getAgent()->setProfil("/api/profils/14");
        $this->_entityManager->persist($data);
        $this->_entityManager->flush();
    }

    /**
     * {@inheritdoc}
     * @param Agence $data
     */
    public function remove($data, array $context = [])
    {
        $data->getAgent()->setIsArchived(true);
        $data->setIsArchived(true);
        // $data->setArchive(1);
        // $this->_entityManager->persist($data);
        // $this->_entityManager->flush();
        // $this->_entityManager->remove($data);
        $this->_entityManager->flush();
    }
}
