<?php

class Anexo
{
    private $id = 0;
    private $book_id = 0;
    private $title = "";
    private $archive = "";

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setBookId(int $book_id)
    {
        $this->book_id = $book_id;
    }

    public function getBookId(): int
    {
        return $this->book_id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setArchive(string $archive)
    {
        $this->archive = $archive;
    }

    public function getArchive(): string
    {
        return $this->archive;
    }
}
