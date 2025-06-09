<?php
class Can extends Animal implements Adoptable {
    public const TIPO = 'can';
    private ?string $adoptante = null;

    public function falar(): string {
        return "Guau!";
    }

    public function adoptar(string $nomeAdoptante): void {
        $this->adoptante = $nomeAdoptante;
    }

    public function describir(): string {
        $info = parent::describir();
        return "$info Tipo: ".self::TIPO.". Adoptado por: ".($this->adoptante ?? "ninguén");
    }
}
