<?php 

namespace Miguel\tests;

use PHPUnit\Framework\TestCase;
use Miguel\Ex2lvl1\VerificarGrado;

class VerificarGradoTest extends TestCase{

    public function testVerificarGradoPrimera(){

        $gradoNota = new VerificarGrado();
        $this->assertEquals("El grado del alumno es de Primera División.", $gradoNota->VerificarGrado(95));
    }

    public function testVerificarGradoSegunda(){

        $gradoNota = new VerificarGrado();
        $this->assertEquals("El grado del alumno es de Segunda División.", $gradoNota->VerificarGrado(49));
    }

    
}
?>