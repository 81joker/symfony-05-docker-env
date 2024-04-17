<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    private $usersRepository;
    private $em;
    public function __construct(UsersRepository $usersRepository, EntityManagerInterface $em)
    {
        // public function __construct(EntityManagerInterface $em) {
        $this->usersRepository = $usersRepository;
        $this->em = $em;
    }

    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        // $repository = $entityManager->getRepository(Users::class);
        // $product = $repository->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $this->usersRepository->findAll(),
        ]);
    }
}
