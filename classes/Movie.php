<?php
class Movie {
	private $titolo;
	private $regista;
	private $anno;
	private $durata;
	private $generi;
	private $attori;

	public function __construct($_titolo, $_regista, $_anno, $_durata = 0, $_generi = [], $_attori = [])
	{
		$this->titolo = $_titolo;
		$this->regista = $_regista;
		$this->anno = $_anno;
		$this->durata = $_durata;
		$this->generi = $_generi;
		$this->attori = $_attori;
	}

	public function getTitolo()
	{
		return $this->titolo;
	}

	public function getRegista()
	{
		return $this->regista;
	}

	public function getAnno()
	{
		return $this->anno;
	}

	public function getDurata()
	{
		return $this->durata;
	}

	public function getGeneri()
	{
		return $this->generi;
	}

	public function getAttori()
	{
		return $this->attori;
	}

	public function setAttori($_attore)
	{
		$this->attori[] = $_attore;
	}
}