<?php
/** 
File: assignment8
Author: Taylor DeBolt
Date: 2/10/21
*/
//error_reporting(0);

//This is for the merge conflict
//This is a test

//*******************************Artist Class****************************
Class Artist {
	static public $artistCount = 0;
	private $firstName;
	private $lastName;
	private $birthCity;
	private $birthDate;
	private $deathDate;

//Artist Constructor
function __construct($firstName, $lastName, $city, $birth, $death=null) {
	self::$artistCount++;
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->birthCity = $city;
	$this->birthDate = $birth;
	$this->deathDate = $death;
	} 
							//Get and Set Methods
//FirstName
public function getFirstName() {
	return $this->firstName;
	}
public function setFirstName($firstName) {
	$this->firstName = $firstName;
	}

//LastName
public function getLastName() {
	return $this->lastName;
	}
public function setLastName($lastName) {
	$this->lastName = $lastName;
	}

//City
public function getCity() {
	return $this->birthCity;
	}	
public function setCity($city) {
	$this->birthCity = $city;
	}

//BirthCity
public function getBirth() {
	return $this->birthDate;
	}	
public function setBirth($birth) {
	$this->birthDate = $birth;
	}

//DeathCity	
public function getDeath() {
	return $this->deathDate;
	}
public function setDeath($death) {
	$this->deathDate = $death;
	}

//ToString
public function __toString() {
	$Output = "";
	$Output = "Artist Name: " . $this->getFirstName() . " " . $this->getLastName() . '<br>'
			  ."Birth City: " . $this->getCity() . '<br>'
			  . "Birth Date: " . $this->getBirth() . '<br>'
			  . "Death Date: " . $this->getDeath();
	return $Output;
	}
}//*******************************End of Artist Class********************


//*******************************Art Class*******************************
Class Art{
	private $name;
	private $artist;
	private $createdYear;

//Art Constructor
function __construct($name, $artist, $createdYear) {
	$this->name = $name;
	$this->artist = $artist;
	$this->createdYear = $createdYear;
	}
								//Get and Set Methods
//Name
public function getName(){
	return $this->name;
	}
public function setName($name){
	$this->name = $name;
	}

//Artist
public function getArtist(){
	return $this->artist;
	}
public function setArtist($artist){
	$this->artist = $artist;
	}

//createdYear
public function getCreatedYear(){
	return $this->createdYear;
	}
public function setCreatedYear($createdYear){
	$this->createdYear = $createdYear;
	}

//ToString
public function __toString() {
	$Output = "";
	$Output = "Art Piece Name: " . $this->getName() . '<br>'
			  . $this->getArtist() . '<br>'
			  . "Year Created: " . $this->getCreatedYear();
	return $Output;
	}
}//*******************************End of Art Class***********************


//*******************************Painting Class**************************
Class Painting extends Art {
	private $medium;

//Painting Constructor
function __construct($medium) {
	$this->medium = $medium;
	}
								//Get and Set Methods
//Medium
public function getMedium(){
	return $this->medium;
	}	
public function setMedium($medium){
	$this->medium = $medium;
	}

//ToString
public function __toString() {
	$Output = "";
	$Output = "Medium: " . $this->getMedium();
	return $Output;
	}
}//*******************************End of Painting Class******************


//*******************************Sculpture Class**************************
Class Sculpture extends Art {
	private $weight;

//Sculpture Constructor
function __construct($weight) {
	$this->weight = $weight;
	}

							//Get and Set Methods
//Weight
public function getWeight(){
	return $this->weight;
	}
public function setWeight($weight){
	$this->weight = $weight;
	}	
	
//ToString
public function __toString() {
	$Output = "";
	$Output = "Weight: " . $this->getWeight() . " Lbs.";
	return $Output;
	}
}//*******************************End of Sculpture Class******************


//Instantiate New Artist 
$picasso = new Artist("Pablo","Picasso","Malaga","Oct 25,1881","Apr 8,1973");
echo($picasso->__toString()) . '<br>' . '<br>';

//Instantiate New Art
$guernica = new Art("Guernica", $picasso, 1934);
echo($guernica->__toString()) . '<br>' . '<br>';

//Instantitate New Painting
$guernica2 = new Painting("Oil");
echo($guernica->__toString() . '<br>' . $guernica2->__toString()) . '<br>' . '<br>';

//Instantiate New Artist, Art, and Sculpture
$michelangelo = new Artist("Michelangelo","di Lodovico Buonarroti Simoni","Caprese","Mar 06,1475","Feb 18,1564");
$david = new Art("Statue of David", $michelangelo, 1504);
$david2 = new Sculpture(12478);
echo($david->__toString() . '<br>' . $david2->__toString()) . '<br>' . '<br>';
?>
