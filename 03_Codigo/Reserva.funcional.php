TESTE DE FUNCIONALIDADE 
Código de Teste (Conflito de horário):
<?php
require_once 'app/Models/ReservaModel.php';

$model = new ReservaModel();
$model->criarReserva("Sala 101", "2025-07-02 08:00", "2025-07-02 10:00");

$resultado = $model->criarReserva("Sala 101", "2025-07-02 09:00", "2025-07-02 11:00");

if (!$resultado) {
    echo " Conflito identificado corretamente. Reserva não permitida.\n";
} else {
    echo " Erro: Conflito não detectado.\n";
}
