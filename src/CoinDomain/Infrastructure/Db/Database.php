<?php
//declare(strict_types=1);

namespace Bot\CoinDomain\Infrastructure\Db;

//use PgSql\Connection;
use \Exception;

class Database implements DbConfig
{

    static private $instance;
    private $db = null;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }


        return self::$instance;
    }

    private function __construct()
    {
    }

    public function connectDbConfig(): string
    {
        return ' host=' . DbConfig::DbConfigHost . ' dbname=' . DbConfig::DbConfigDatabase . ' user=' . DbConfig::DbConfigUser . ' password=' . DbConfig::DbConfigPass;
    }

    public function connect(): object
    {
        $this->db = pg_connect(self::connectDbConfig());

        return $this;
    }

    public function query($query)
    {
        return pg_query($this->db, $query);
    }

















//    protected static object|bool $instance;
//
////    /**
////     * @throws Exception
////     */
////    protected function __construct()
////    {
////        throw new Exception("Can't __construct a singleton");
////    }
////
////    /**
////     * @throws Exception
////     */
////    private function __clone()
////    {
////        throw new Exception("Can't __clone a singleton");
////    }
////
////    /**
////     * @throws Exception
////     */
////    public function __wakeup()
////    {
////        throw new Exception("Can't __wakeup a singleton");
////    }
//
//    public static function getInstance(): object|bool
//    {
//        if (empty(self::$instance)) {
//               self::$instance = new self(); //pg_connect(self::connectDbConfig());
//        }
//
//        return self::$instance;
//    }
//
//    public function connectDbConfig(): string
//    {
//        return ' host=' . DbConfig::DbConfigHost . ' dbname=' .  DbConfig::DbConfigDatabase .  ' user=' . DbConfig::DbConfigUser .  ' password=' . DbConfig::DbConfigPass;
//    }
//
//
////    private $db = null;
////
////    static private ?Database $instance = null;
////
////    public static function getInstance()
////    {
////        if (self::$instance === null) {
////            self::$instance = new self();
////        }
////
////        return self::$instance;
////    }
////
////    public function connectDbConfig(): string
////    {
////        return 'host=' . DbConfig::DbConfigHost . 'dbname=' .  DbConfig::DbConfigDatabase .  'user=' . DbConfig::DbConfigUser .  'password=' . DbConfig::DbConfigPass;
////    }
////
////    public function __wakeup()
////    {
////        throw new Exception("Can't __wakeup a singleton");
////    }
////
////    protected function __construct()
////    {
////        throw new Exception("Can't __construct a singleton");
////    }
////
////    private function __clone()
////    {
////        throw new Exception("Can't __clone a singleton");
////    }
////
////    public function connect(string $connection)
////    {
////        return $this->db = pg_connect($connection);
////    }
////
//
//    public function query($query): mixed
//    {
//        return pg_query(self::$instance, $query);
//    }
//
//    public function connect()
//    {
//
//    }

}




////$dbh = pg_connect("host=localhost dbname=postgres user=root password=root");
//  connectDbConfig
///* configuration */
//$example_db = ExampleDatabase::getInstance();
//$example_db->connect('dbname=testing');
//
///* usage */
//$example_db = ExampleDatabase::getInstance();
//$result = $example_db->query('SELECT * FROM users');
