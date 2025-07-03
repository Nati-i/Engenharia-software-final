<!-- interface/criar_reserva.php -->
<?php include 'header.php'; ?>

<h2>Criar Reserva</h2>
<form action="/reserva/salvar" method="post">
    <label for="sala">Sala:</label>
    <input type="text" id="sala" name="sala" required><br>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required><br>

    <label for="hora_inicio">Hora Início:</label>
    <input type="time" id="hora_inicio" name="hora_inicio" required><br>

    <label for="hora_fim">Hora Fim:</label>
    <input type="time" id="hora_fim" name="hora_fim" required><br>

    <button type="submit">Reservar</button>
</form>

<?php include 'footer.php'; ?>
