TESTE DE FUNCIONALIDADE 

Código de Teste (Reserva válida):
<?php
require_once 'app/Models/ReservaModel.php';
$model = new ReservaModel();
$resultado = $model->criarReserva("Sala 101", "2025-07-02 08:00", "2025-07-02 10:00");
if ($resultado) {
    echo "Reserva criada com sucesso.\n";
} else {
    echo " Falha ao criar reserva.\n";
}
