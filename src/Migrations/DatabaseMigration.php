<?php
namespace App\Migrations;
use PDO;
use PDOException;

class DatabaseMigration
{
    private $pdo;

    public function __construct()
    {
        // Wczytanie konfiguracji
        $config = include __DIR__ . '/../../config.production.php';


        // Ustawienia połączenia z bazą danych
        $host = $config['db']['host'];
        $db = $config['db']['dbname'];
        $user = $config['db']['user'];
        $pass = $config['db']['password'];

        try {
            $dsn = "pgsql:host=$host;dbname=$db";
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Połączono z bazą danych!\n";
        } catch (PDOException $e) {
            echo "Błąd połączenia: " . $e->getMessage() . "\n";
            exit;
        }
    }

    public function createTasksTable()
    {
        // Definiowanie zapytania SQL do stworzenia tabeli
        $sql = "
            CREATE TABLE IF NOT EXISTS tasks (
                id SERIAL PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                description TEXT,
                completed BOOLEAN DEFAULT FALSE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ";

        try {
            // Wykonanie zapytania
            $this->pdo->exec($sql);
            echo "Tabela 'tasks' została utworzona!\n";
        } catch (PDOException $e) {
            echo "Błąd podczas tworzenia tabeli: " . $e->getMessage() . "\n";
        }
    }

    public function dropTasksTable()
    {
        // Definiowanie zapytania SQL do usunięcia tabeli
        $sql = "DROP TABLE IF EXISTS tasks";

        try {
            // Wykonanie zapytania
            $this->pdo->exec($sql);
            echo "Tabela 'tasks' została usunięta!\n";
        } catch (PDOException $e) {
            echo "Błąd podczas usuwania tabeli: " . $e->getMessage() . "\n";
        }
    }
}




