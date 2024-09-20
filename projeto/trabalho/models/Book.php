<?php

class Book {
    private $id = 0;
    private $title = "";
    private $description = "";
    private $genre = "";
    private $author = "";
    private $completed = false;

    /**
     * @var Array de Anexo
     */

    private $anexos;

    public function __construct() {
        $this->anexos = [];
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre(string $genre) {
        $this->genre = $genre;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function getCompleted() {
        return $this->completed;
    }

    public function setCompleted(bool $completed) {
        $this->completed = $completed;
    }

    public function getAnexos() {
        return $this->anexos;
    }

    public function setAnexos(array $anexos) {
        $this->anexos = [];
        foreach ($anexos as $anexo) {
            $this->addAnexos($anexo);
        }
    }

    public function addAnexos(Anexo $anexo) {
        array_push(array: $this->anexos, values: $anexo);
    }

}