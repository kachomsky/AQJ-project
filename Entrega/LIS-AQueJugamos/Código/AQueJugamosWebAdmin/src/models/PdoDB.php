<?php

/**
 * Class Db
 */
class PdoDb
{
    /**
     * @var \PdoDb
     */
    private static $instance;

    /**
     * @var \PDO
     */
    private $conn;

    /**
     * Db constructor.
     */
    private function __construct()
    {
        try {
            $this->conn = new \PDO(
                sprintf('mysql:dbname=%s;host=%s;port=%s;charset=UTF8', DATABASE_NAME, DATABASE_HOST,DATABASE_PORT),
                DATABASE_USER,
                DATABASE_PASSWORD
            );
        } catch (\PDOException $e) {
            echo sprintf('Connection failed: %s', $e->getMessage());
            die;
        }
    }

    /**
     * @return PdoDb
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        $sql = 'SELECT id, `name`
                FROM category';

        $stmt = $this->conn->query($sql, \PDO::FETCH_ASSOC);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function logInUser($email): array
    {  
        $sql = 'SELECT * FROM usuario u WHERE u.Email = :email';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $sql_query = $dbh->prepare($sql);
        $sql_query->bindParam(":email", $email, PDO::PARAM_STR);
        $sql_query->execute();
        $result = $sql_query->fetch(PDO::FETCH_ASSOC);
        if ($result === false) {
            $messageError =  "Ha habido algun error a la hora de realizar el login.";
            return array("error" => $messageError);
        }
        /*fetchAll nos convierte los datos conseguidos en la consulta a un array (en este caso asociativo porque lo indicamos en los parametros).         
        Equivalente de forma manual:
        
        while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
            $arrayResultado[] = $result;

        }*/
        $dbh = null;
        return $result;
    }

    /**
     * @return array
     */
    public function obtenerTodosTipos(): array
    {  
        $sql = 'SELECT * FROM tipo';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $stmt = $this->conn->query($sql, \PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $result;
        
    }

    /**
     * @return array
     */
    public function obtenerTodosJuegos(): array
    {  
        $sql = 'SELECT * FROM juego';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $stmt = $this->conn->query($sql, \PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $result;
        
    }

    /**
     * @return array
     */
    public function obtenerTodasCategorias(): array
    {  
        $sql = 'SELECT * FROM categoria';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $stmt = $this->conn->query($sql, \PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $result;
    }

    /**
     * @return boolean
     */
    public function insertarJuego($nombreJuego, $dificultad, $edad, $duracion, $tipo, $categoria, $numeroJugadores, $descripcion, $img, $materiales): bool
    {  
        $valoracion = 0;
        if($categoria != 2){
            echo "dentro de materialess";
            $materiales = '';
        }

        $sql = 'INSERT INTO juego (idCategoria, NombreJuego, Dificultad, Edad, Jugadores, Descripcion, Tiempo, Valoracion, Materiales, idTipo, Imagen)
                VALUES (:idCategoria, :NombreJuego, :Dificultad, :Edad, :Jugadores, :Descripcion, :Tiempo, :Valoracion, :Materiales, :type, :imagen)';
        $dbh = $this->conn;
        
        $sql_query = $dbh->prepare($sql);

        //Binding parameters
        $sql_query->bindParam(":idCategoria", $categoria);
        $sql_query->bindParam(":NombreJuego", $nombreJuego);
        $sql_query->bindParam(":Dificultad", $dificultad);
        $sql_query->bindParam(":Edad", $edad);
        $sql_query->bindParam(":Jugadores", $numeroJugadores);
        $sql_query->bindParam(":Descripcion", $descripcion);
        $sql_query->bindParam(":Tiempo", $duracion);
        $sql_query->bindParam(":Valoracion", $valoracion);
        $sql_query->bindParam(":Materiales", $materiales);
        $sql_query->bindParam(":type", $tipo);
        $sql_query->bindParam(":imagen", $img);
        
        $result = $sql_query->execute();
        $dbh = null;
        return $result;
        
    }

    /**
     * @return array
     */
    public function searchJuegos($nombreJuego) : array
    {
        $dbh = $this->conn;
        $name = '%'.$nombreJuego.'%';
        $sql_query = $dbh->prepare("SELECT * FROM juego WHERE NombreJuego LIKE :NombreJuego");
        $sql_query->bindParam(':NombreJuego', $name);
        $sql_query->execute();

        $result = $sql_query->fetchAll(PDO::FETCH_ASSOC);
        //close connection
        $dbh = null;
        return $result;
    }

    /**
     * @return array
     */
    public function buscarTipoPorId($idTipo) : array
    {
        $sql = 'SELECT * FROM tipo t WHERE t.idTipo = :type';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $sql_query = $dbh->prepare($sql);
        $sql_query->bindParam(":type", $idTipo);
        $sql_query->execute();
        $result = $sql_query->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $result;
    }

    /**
     * @return array
     */
    public function buscarCategoriaPorId($idCategoria) : array
    {
        $sql = 'SELECT * FROM categoria c WHERE c.idCategoria = :idCategoria';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $sql_query = $dbh->prepare($sql);
        $sql_query->bindParam(":idCategoria", $idCategoria);
        $sql_query->execute();
        $result = $sql_query->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $result;
    }

    /**
     * @return bool
     */
    public function eliminarJuego($idJuego) : bool
    {
        $sql = 'DELETE FROM juego WHERE idJuego = :idJuego';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $sql_query = $dbh->prepare($sql);
        $sql_query->bindParam(":idJuego", $idJuego);
        $result = $sql_query->execute();
        $dbh = null;
        return $result;
    }


    /**
     * @return array
     */
    public function buscarJuegoPorId($idJuego) : array
    {
        $sql = 'SELECT * FROM juego j WHERE j.idJuego = :idJuego';
        $dbh = $this->conn;
        //Utilizamos consultas parametrizadas para evitar ataques SQL INJECTION
        $sql_query = $dbh->prepare($sql);
        $sql_query->bindParam(":idJuego", $idJuego);
        $sql_query->execute();
        $result = $sql_query->fetch(PDO::FETCH_ASSOC);
        if($result === false){
            echo "dentroooooooooo";
        }
        $dbh = null;
        return $result;
    }

    /**
     * @return boolean
     */
    public function modificarJuego($nombreJuego, $dificultad, $edad, $duracion, $tipo, $categoria, $numeroJugadores, $descripcion, $idJuego): bool
    {  
        $valoracion = 0;
        $materiales = '';

        $sql = 'UPDATE juego SET idCategoria = :idCategoria, NombreJuego = :NombreJuego, Dificultad = :Dificultad, Edad = :Edad, Jugadores = :Jugadores, Descripcion = :Descripcion, Tiempo = :Tiempo, Valoracion = :Valoracion, Materiales = :Materiales, idTipo = :type
            WHERE idJuego = :idJuego';
        $dbh = $this->conn;
        
        $sql_query = $dbh->prepare($sql);

        //Binding parameters
        $sql_query->bindParam(":idCategoria", $categoria);
        $sql_query->bindParam(":NombreJuego", $nombreJuego);
        $sql_query->bindParam(":Dificultad", $dificultad);
        $sql_query->bindParam(":Edad", $edad);
        $sql_query->bindParam(":Jugadores", $numeroJugadores);
        $sql_query->bindParam(":Descripcion", $descripcion);
        $sql_query->bindParam(":Tiempo", $duracion);
        $sql_query->bindParam(":Valoracion", $valoracion);
        $sql_query->bindParam(":Materiales", $materiales);
        $sql_query->bindParam(":type", $tipo);
        $sql_query->bindParam(":idJuego", $idJuego);
        
        $result = $sql_query->execute();
        $dbh = null;
        return $result;
        
    }


}
