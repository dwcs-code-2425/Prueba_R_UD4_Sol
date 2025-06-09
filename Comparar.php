<?php 
interface Comparar {
    /**
     * Compara este animal con outro.
     * Devolve:
     * -1 se este é máis novo
     * 0 se teñen a mesma idade
     * 1 se este é máis vello
     */
    public function compararCon(Animal $outro): int;
}
