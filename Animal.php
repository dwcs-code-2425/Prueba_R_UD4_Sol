<?php
abstract class Animal implements Comparar {
    protected string $nome;
    protected DateTime $dataNacemento;
    protected static int $contador = 0;

    public const TIPO = 'descoñecido';


    public function __construct(string $nome, DateTime $dataNacemento) {
    $this->nome = $nome;
    $this->dataNacemento = $dataNacemento;
    self::$contador++;
}

    public static function obterNumeroAnimais(): int {
        return self::$contador;
    }

    public function describir(): string {
        return "Nome: $this->nome, Nado o: ".$this->dataNacemento->format('d/m/Y').".";
    }

    public function compararCon(Animal $outro): int {
        if ($this->dataNacemento == $outro->dataNacemento) {
            return 0;
        }
        return ($this->dataNacemento < $outro->dataNacemento) ? 1 : -1;
    }

    public abstract function falar(): string;
}
