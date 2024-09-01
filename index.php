<?php
// Importo il file class.php
require_once 'class.php';

// Definizione della classe Post
class Post {
    private $titolo;
    private $categoria;
    private $tag;

    // Costruttore per inizializzare gli attributi
    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    // Metodo per visualizzare l'articolo completo
    public function visualizzaArticolo() {
        echo "Titolo: " . $this->titolo . "\n";
        echo "Categoria: ";
        $this->categoria->getMyCategory();
        echo "\n";
        echo "Tag: " . $this->tag . "\n";
    }
}

// Creazione delle istanze di classe Post
$post1 = new Post("Ultime notizie", new Attualita(), "notizie, attualita");
$post2 = new Post("Risultati sportivi", new Sport(), "sport, risultati");
$post3 = new Post("Ultimi gossip", new Gossip(), "gossip, celebrità");
$post4 = new Post("Lezioni di storia", new Storia(), "storia, educazione");

// Visualizzazione degli articoli completi
$post1->visualizzaArticolo();
echo "\n";
$post2->visualizzaArticolo();
echo "\n";
$post3->visualizzaArticolo();
echo "\n";
$post4->visualizzaArticolo();
?>
