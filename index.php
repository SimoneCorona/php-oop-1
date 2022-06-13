<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e -->
<!-- metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui: -->
<!-- - è definita una classe ‘Movie’ -->
   <!-- => all'interno della classe sono dichiarate delle variabili d'istanza -->
   <!-- => all'interno della classe è definito un costruttore -->
   <!-- => all'interno della classe è definito almeno un metodo -->
<!-- - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movie
{
    public $title;
    public $genre;
    public $rating;

    function __construct($_title, $_genre, $_rating)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->rating = $_rating;
    }

    public function ratepercentage()
    {
        foreach ($this->rating as $rate) {
            $ratepercentage = "$rate * 10" . "%";
        }
        return $ratepercentage;
    }
}

$the_Godfather = new Movie("The Godfather", "dramatic", 9);
$the_Godfather->ratepercentage($rate);

$saving_Private_Ryan = new Movie("Saving Private Ryan", "war movie", 8);
$saving_Private_Ryan->ratepercentage($rate);

$movieList = [];
$movieList[] = $the_Godfather;
$movieList[] = $saving_Private_Ryan;
?>

<?php foreach ($movieList as $film) { ?>
    <div>
        <h1> <?php echo $film->$title ?> </h1>
        <h2> <?php echo $film->$genre ?> </h2>
        <p>Utenti a cui è piaciuto: <?php echo $film->ratepercentage(); ?></p>
    </div>
<?php } ?>
