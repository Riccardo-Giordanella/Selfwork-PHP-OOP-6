<?php
// Definizione della classe astratta Category
abstract class Category {
    // Metodo astratto che deve essere implementato dalle classi figlie
    abstract public function getMyCategory();
}

// Classe Attualita' che estende Category
class Attualita extends Category {
    public function getMyCategory() {
        echo "Attualita'";
    }
}

// Classe Sport che estende Category
class Sport extends Category {
    public function getMyCategory() {
        echo "Sport";
    }
}

// Classe Gossip che estende Category
class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip";
    }
}

// Classe Storia che estende Category
class Storia extends Category {
    public function getMyCategory() {
        echo "Storia";
    }
}

// Esempio di utilizzo delle classi
$attualita = new Attualita();
$attualita->getMyCategory(); // Output: Attualita'

$sport = new Sport();
$sport->getMyCategory(); // Output: Sport

$gossip = new Gossip();
$gossip->getMyCategory(); // Output: Gossip

$storia = new Storia();
$storia->getMyCategory(); // Output: Storia
?>
