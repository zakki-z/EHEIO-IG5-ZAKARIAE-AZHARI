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

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        $text = "Hello This is home !";
        $tabYear = [2020, 2021, 2022, 2023];
        return $this->render('dummy/home.html.twig', [
            "text" => $text,
            "years" => $tabYear
        ]);
    }

    #[Route('/news', name: 'app_news')]
    public function news(): Response
    {
        $newsTitle = "Latest News";
        $articles = [
            "Symfony 7.0 Released",
            "PHP 8.3 New Features",
            "Twig Template Updates",
            "Doctrine ORM Best Practices"
        ];
        return $this->render('dummy/news.html.twig', [
            "title" => $newsTitle,
            "articles" => $articles
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $contactInfo = [
            'email' => 'contact@example.com',
            'phone' => '+212 123 456 789',
            'address' => 'Oujda, Morocco'
        ];
        return $this->render('dummy/contact.html.twig', [
            "contactInfo" => $contactInfo
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $aboutText = "Welcome to our Symfony application. We are learning Twig templates!";
        $team = ['Mohammed', 'Ahmed', 'Fatima', 'Youssef'];
        return $this->render('dummy/about.html.twig', [
            "aboutText" => $aboutText,
            "team" => $team
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