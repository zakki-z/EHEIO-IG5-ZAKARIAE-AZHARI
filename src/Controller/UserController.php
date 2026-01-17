<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\UserType;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    #[Route('/add-user', name: 'app_user_add')]
    public function addUser(): Response{
        $user = new User();
        $userForm = $this->createForm(UserType::class,$user);
        return $this->render('user/index.html.twig', [
            'userForm'=>$userForm
        ]);
    }
}
