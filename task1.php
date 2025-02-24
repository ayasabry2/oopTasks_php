<?php 
class Author{
    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        if ($gender === 'm' || $gender === 'f') {
            $this->gender = $gender;
        } else {
            echo("Gender must be 'm' or 'f'");
        }
    }
    function getName()
        {
            return $this->name;
        }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
        {
            return $this->email;
        }
    function getGender()
        {
            return $this->gender;
        }
public function __toString()
        {
            return "Author[name=" . $this->name . ",email=" . $this->email . ",gender=" . $this->gender . "]";
        }
}
$author1 = new Author("aya sabry", "aya.sabry@example.com", 'f');
echo $author1 ,"<br>";

$author2 = new Author("ahmed", "ah.med@example.com", 'm');
echo $author2,"<br>";

class Book{
    private $name;
    private $authors=[];
    private $price;
    private $qty;
public function __construct($name, $authors, $price, $qty = 0) {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;}
         function getName() {
            return $this->name;
        }
    
        function getAuthors() {
            return $this->authors;
        }
    
        function getPrice() {
            return $this->price;
        }
    
        function setPrice($price) {
            $this->price = $price;
        }
    
        function getQty() {
            return $this->qty;
        }
    
         function setQty($qty) {
            $this->qty = $qty;
        }
    
        function getAuthorNames() {
            return array_map(fn($author) => $author->getName(), $this->authors);
        }
   
    public function __toString() {
        $authorsInfo = array_map(fn($author) => (string)$author, $this->authors);
        return "Book[name=" . $this->name . 
               ", authors={" . implode("; ", $authorsInfo) . "}" . 
               ", price=" . $this->price . 
               ", qty=" . $this->qty . "]";
    }
}
$book1 = new Book("PHP basics", [$author1], 20);
$book2 = new Book("Java Basics", [$author1, $author2], 21.99, 5);

echo $book1 ,"<br>";
echo $book2 ,"<br>";
?>