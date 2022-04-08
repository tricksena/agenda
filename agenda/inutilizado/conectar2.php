<?php
    class conectar {
        private static $endereco = '';
        private static $banco = '';
        private static $usuario = '';
        private static $senha = '';
        private static $cont = null;
        public function __construct()
        {
            die('A função init não é permitida');
        }

        public static function conectar() {
            if (null==self::$cont){
            try {
                self::$cont=new PDO("pgsql:host=".self::$banco.";"."localhost".self::$usuario,self::$senha, self::$endereco);

            
            } catch (PDOException $e) {
                die($e->getMessage());
            }
            }
        return self::$cont;
    }
    public static function desconectar () {
        self::$cont=null;
    }
    }


        /*
        $pdo = new PDO("pgsql:host=$endereco;port=5433;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        echo "Conectado no banco de dados!";
        */
?>

