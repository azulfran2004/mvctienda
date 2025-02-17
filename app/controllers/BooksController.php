<?php

class BooksController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Book');
    }

    public function index()
    {
        $session = new Session();

        if ($session->getLogin()) {

            $books = $this->model->getBooks();

            $data = [
                'title' => 'Libros',
                'menu' => true,
                'active' => 'books',
                'data' => $books,
                'user_id' => $session->getUserId(),

            ];

            $this->view('books/index', $data);

        } else {
            header('location:' . ROOT);
        }
    }
}