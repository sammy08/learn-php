<?php

class aluno {
	public $nome;
	public $email;
	public $curso;
	public $horario;
	function __construct() {

		function getNome() {
			return $this->nome;
		}
		function getEmail() {
			return $this->email;
		}
		function getCurso() {
			return $this -> curso;
		}
		function getHorario() {
			return $horarioCurso = $_POST['turnoCurso'];
		}

		function setNome($nome) {
			$this->nome = $nome;
		}

		function setEmail($email) {
			$this->email = $email;
		}

		function setCurso($curso) {
			switch ($cursoMateria) {

			case 'Design Responsivo':
				$cursoMateria = 'Design Responsivo';
				break;
			case 'Bootstrap':
				$cursoMateria = 'Bootstrap';
				break;
			case 'Foundation':
				$cursoMateria = 'Foundation';
				break;
			case 'Sass':
				$cursoMateria = 'Sass';
				break;
			case 'JavaScript':
				$cursoMateria = 'JavaScript';
				break;
			case 'Ruby on Rails':
				$cursoMateria = 'Ruby on Rails';
				break;
			case 'PHP':
				$cursoMateria = 'PHP';
				break;
			case 'Big Data':
				$cursoMateria = 'Big Data';
				break;
			case 'Lavarel':
				$cursoMateria = 'Lavarel';
				break;
			case 'Big Data':
				$cursoMateria = 'Big Data';
				break;
			case 'Python':
				$cursoMateria = 'Python';
				break;

			}
			$this->curso = $cursoMateria;
		}
		function setHorario($horario) {
			switch ($horarioCurso) {
			case 'diurno':
				$horarioCurso = 'diurno';
				break;
			case 'matutino':
				$horarioCurso = 'matutino';
				break;
			case 'noturno':
				$horarioCurso = 'noturno';
				break;

			}
			$this->horario = $horarioCurso;
		}
	}
}
?>

