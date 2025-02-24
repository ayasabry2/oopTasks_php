<?php
abstract class Person {
    protected $name;
    protected $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName() {
        return $this->name;
    }
    abstract public function getAddress();
    abstract public function setAddress($address);

    public function __toString() {
        return "Person[name=" . $this->name . ", address=" . $this->address . "]";
    }
}
class Student extends Person {
    private $program;
    private $year;
    private $fee;

    public function __construct($name, $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram() {
        return $this->program;
    }

    public function setProgram($program) {
        $this->program = $program;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getFee() {
        return $this->fee;
    }

    public function setFee($fee) {
        $this->fee = $fee;
    }
    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function __toString() {
        return "Student[" . parent::__toString() . ", program=" . $this->program . ", year=" . $this->year . ", fee=" . $this->fee . "]";
    }
}
class Staff extends Person {
    private $school;
    private $pay;

    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool() {
        return $this->school;
    }

    public function setSchool($school) {
        $this->school = $school;
    }

    public function getPay() {
        return $this->pay;
    }

    public function setPay($pay) {
        $this->pay = $pay;
    }
    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function __toString() {
        return "Staff[" . parent::__toString() . ", school=" . $this->school . ", pay=" . $this->pay . "]";
    }
}

$student = new Student("Aya", "123 Street", "Computer Science", 2, 15000.0);
$staff = new Staff("ahmed", "456 Avenue", "old School", 50000.0);

echo $student . "\n";
echo $staff . "\n";
?>
