TESTE UNITÁRIO
Primeiro Teste Unitário: Verificar conflito de horário na reserva (ReservaModelTest.php):
Esse teste garante que não é possível agendar duas reservas sobre o mesmo horário na mesma sala.

<?php
use PHPUnit\Framework\TestCase;

// Simulação da classe ReservaModel
class ReservaModel {
    private $reservas = [];

    public function criarReserva($sala, $inicio, $fim) {
        if (!$this->temConflito($sala, $inicio, $fim)) {
            $this->reservas[] = [
                'sala' => $sala,
                'inicio' => $inicio,
                'fim' => $fim
            ];
            return true;
        }
        return false;
    }

    public function temConflito($sala, $inicio, $fim) {
        foreach ($this->reservas as $reserva) {
            if (
                $reserva['sala'] === $sala &&
                max($reserva['inicio'], $inicio) < min($reserva['fim'], $fim)
            ) {
                return true;
            }
        }
        return false;
    }
}

class ReservaModelTest extends TestCase {
    public function testReservaSemConflito() {
        $reserva = new ReservaModel();
        $resultado = $reserva->criarReserva("Sala A", "2025-07-02 08:00", "2025-07-02 10:00");
        $this->assertTrue($resultado);
    }

    public function testReservaComConflito() {
        $reserva = new ReservaModel();
        $reserva->criarReserva("Sala A", "2025-07-02 08:00", "2025-07-02 10:00");
        $resultado = $reserva->criarReserva("Sala A", "2025-07-02 09:00", "2025-07-02 11:00");
        $this->assertFalse($resultado);
    }
}
