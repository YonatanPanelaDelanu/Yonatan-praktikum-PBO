<?php
class KoleksiFilm implements IteratorAggregate {
    private $film = [];

    public function __construct(array $film) {
        $this->film = $film;
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->film);
    }
}

// Contoh penggunaan
$koleksi = new KoleksiFilm(["Inception", "Interstellar", "The Matrix"]);

foreach ($koleksi as $judul) {
    echo "Judul Film: $judul" . PHP_EOL;
}
?>