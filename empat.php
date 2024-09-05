<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type): array
    {
        $result = [];
        if ($type == 'name') {
            $result = ['name'=> $this->name];
        } elseif ($type == 'description'){
            $result = ['descriprion'=> $this->description];
        } elseif ($type == 'all'){
            $result = [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        return $result;
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() : array
    {
        return[
            'ISBN' => $this->ISBN,
            'title'=> $this->title,
            'description'=> $this->description,
            'category' => $this->category,
            'language'=> $this->language,
            'numberOfPage'=> $this->numberOfPage,
            'author'=> $this->author,
            'publisher'=> $this->publisher
        ];
    }

    public function detail($ISBN)
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else{
            return "Book not found with this ISBN";
        }
    }

}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function setPhone($phone): void
    {
        $this->phone = (string)$phone;
    }

    public function getPhone(): int
    {
        return (int)$this->phone;
    }
}
