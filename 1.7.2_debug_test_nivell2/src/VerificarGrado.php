<?php

namespace Miguel\Ex2Lvl1;

class VerificarGrado{

    public function verificarGrado(int $nota) : string{

        if ($nota > 60) {
            return "El grado del alumno es de Primera División.";
        } elseif ( $nota >= 45) {
            return "El grado del alumno es de Segunda División.";
        } elseif ( $nota >= 33) {
            return "El grado del alumno es de Tercera División.";
        } else{
            return "El alumno está reprobado.";
        }
    }
}
?>