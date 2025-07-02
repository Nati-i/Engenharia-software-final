Exemplo 1: DAO - ReservaModel.php

class ReservaModel {
  private $conn;

  public function __construct($dbConnection) {
    $this->conn = $dbConnection;
  }

  public function salvarReserva($dados) {
    $sql = "INSERT INTO reservas (usuario_id, sala_id, data, hora_inicio, hora_fim) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $dados['usuario_id'],
      $dados['sala_id'],
      $dados['data'],
      $dados['hora_inicio'],
      $dados['hora_fim']
    ]);
  }
}

Exemplo 2: Singleton - Database.php

class Database {
  private static $instance = null;
  private $conn;

  private function __construct() {
    $this->conn = new PDO("mysql:host=localhost;dbname=sistema", "usuario", "senha");
  }

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection() {
    return $this->conn;
  }
}
