<?php

class BookRepository {
    private $db;

    public function __construct(mysqli $db) {
        $this->db = $db;
    }
    
    public function save(Book $book) {
        $title = $book->getTitle();
        $description = $book->getDescription();
        $genre = $book->getGenre();
        $author = $book->getAuthor();
        $completed = $book->getCompleted() ? 1 : 0;

        $postSql = "
            INSERT INTO books
            (title, description, genre, author, completed)
            VALUES
            (
                '{$title}',
                '{$description}',
                '{$genre}',
                '{$author}',
                '{$completed}'
            )
        ";

        $this->db->query(query: $postSql);
    }
    public function update(Book $book): void {
        $id = $book->getId();
        $title = $book->getTitle();
        $description = $book->getDescription();
        $genre = $book->getGenre();
        $author = $book->getAuthor();
        $completed = $book->getCompleted() ? 1 : 0;

        $putSql = "
            UPDATE books SET
                title = '{$title}',
                description = '{$description}',
                genre = '{$genre}',
                author = '{$author}',
                completed = '{$completed}'
            WHERE id = {$id}
        ";

        $this->db->query(query: $putSql);
    }

    public function search($book_id = 0): array|Book {
        if($book_id > 0) {
            return $this->search_book($book_id);
        } else {
            return $this->search_books();
        }
    }

    private function search_books(): array {
        $getSql = "SELECT * FROM books";
        $result = $this->db->query($getSql);
        $books = [];

        while($book = $result->fetch_object(class: 'Book')) {
            $book->setAnexos($this->search_anexos($book->getId()));
            $books[] = $book;
        }

        return $books;
    }

    private function search_book($id): Book {
        $getSql = "SELECT * FROM books WHERE id = " . $id;
        $result = $this->db->query($getSql);

        $book = $result->fetch_object(class:"Book");
        $book->setAnexos($this->search_anexos($book->getId()));

        return $book;
    }

    public function save_anexo(Anexo $anexo): void {
        $postSql = "INSERT INTO anexos
            (book_id, title, archive)
            VALUES
            (
                {$anexo->getBookId()},
                '{$anexo->getTitle()}',
                '{$anexo->getArchive()}'
            )
            ";
        
        $this->db->query($postSql);
    }

    public function search_anexos($book_id): array {
        $getSql = "SELECT * FROM anexos WHERE book_id = {$book_id}";
        $result = $this->db->query($getSql);

        $anexos = [];

        while($anexo = $result->fetch_object(class:"Anexo")) {
            $anexos[] = $anexo;
        }

        return $anexos;
    }

    public function search_anexo(int $anexo_id): Anexo {
        $getSql = "SELECT * FROM anexos WHERE id = {$anexo_id}";
        $result = $this->db->query($getSql);

        return $result->fetch_object(class:"Anexo");
    }

    public function remove(int $id): void {
        $removeSql = "DELETE FROM books WHERE id = {$id}";

        $this->db->query($removeSql);
    }

    public function remove_anexos($id): void {
        $removeSql = "DELETE FROM anexos WHERE id = {$id}";

        $this->db->query($removeSql);
    }
}