<?php
    // Definição da classe
       echo "<strong>Grupo 1</strong><p>";
        echo "<strong>Exercício 1</strong><p>";

    class Pessoa {
        private $nome;
        private $idade;

        //Construtor
        public function __construct($nome, $idade){    
        $this->nome = $nome;
        $this->idade = $idade;}

        // Método opcional para exibir os dados
        public function apresentar(){
            echo "Nome: " . $this->nome . "<p>"."Idade: " . $this->idade . "<p>"; // (->) Isto quer dizer "corresponde"
        }
    }
    // Criar o primeiro objeto
    $p1=new Pessoa ("Dr.Pombal", 25);
    $p2=new Pessoa ("Daniel", 12);
    $p3=new Pessoa ("Edgar", 81);
    $p1-> apresentar ();
    $p2-> apresentar ();
    $p3-> apresentar ();

    echo "<strong>Exercício 2 </strong><p>";

    class Retangulo {
        private $largura;
        private $altura;

        public function __construct ($largura,$altura){
            $this -> largura = $largura;
            $this -> altura = $altura;
        }
        public function calcularArea (){
            return ($this->largura * $this->altura);
        } 
        public function calcularPerimetro (){
            return 2*($this->largura + $this->altura);}

    }
    $r1=new Retangulo (10,15);
    echo "Área do Retângulo: " .$r1->calcularArea() . "<p>";
    echo "Perímetro do Retângulo: " .$r1->calcularPerimetro() . "<p>";
    
    echo "<strong> Exercício 3 </strong> <p>";
    
    class Aluno{
        private $nome;
        private $numero;
        private $nota1;
        private $nota2;
        private $nota3;

        public function __construct ($nome,$numero,$nota1,$nota2,$nota3){
            $this -> nome = $nome;
            $this -> numero = $numero;
            $this -> nota1 = $nota1;
            $this -> nota2 = $nota2;
            $this -> nota3 = $nota3;
        }

        public function calcularMedia (){
            return ($this->nota1 + $this->nota2 + $this->nota3) /3;
        }

        public function situacao (){
            return $this->calcularMedia() >= 10 ? "Aprovado" : "Reprovado";
        }
        public function apresentar (){
            echo "Nome: " . $this->nome. "<p>";
            echo "Número: " . $this->numero. "<p>";
            echo "Média: " . $this->calcularMedia(). "<p>";
        }
    }
    $a1= new Aluno ("Dr.Pombal",5,18,19,16);
    $a2= new Aluno ("Daniel",3,15,14,17);
    $a3= new Aluno ("Edgar",1,13,19,19);
    $a1-> apresentar ();
    $a2-> apresentar ();
    $a3-> apresentar ();
    
    
?>