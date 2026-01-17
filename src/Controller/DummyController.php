<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController',
        ]);
    }
    #[Route(path: '/dummy/home', name: 'app_home_dummy')]
    public function home(): Response
    {
    $text = "Hello This is home !";
    $tabYear = [2020,2021,2022,2023];
    return $this->render('dummy/home.html.twig', [
        "text" => $text,
        "years" => $tabYear
    ]);
}
    #[Route('/add-book', name: 'app_book_add')]
    public function book(): Response
    {
        $book = new Book();
        $bookForm = $this->createForm(BookType::class, $book);
        return $this->render('dummy/book.html.twig', [
            'bookForm' => $bookForm
        ]);
    }

}
