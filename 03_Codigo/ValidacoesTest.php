O segundo Teste Unitário: Validar horários de início e fim (ValidacoesTest.php)
Esse teste vai verificar a função que valida a lógica de horário está funcionando corretamente (início deve ser antes do fim).

<?php
use PHPUnit\Framework\TestCase;

// Função isolada para validar horários
function horarioEhValido($inicio, $fim) {
    return strtotime($fim) > strtotime($inicio);
}

class ValidacoesTest extends TestCase {
    public function testHorarioValido() {
        $this->assertTrue(horarioEhValido("2025-07-02 08:00", "2025-07-02 10:00"));
    }

    public function testHorarioInvalido() {
        $this->assertFalse(horarioEhValido("2025-07-02 10:00", "2025-07-02 08:00"));
    }
}


