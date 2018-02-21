/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package injector;

import java.io.File;
import java.io.PrintWriter;

/**
 *
 * @author Spitzenreiter
 */
public class Injector{    
    boolean found = false;
    String dapodir;
    public String findDir (String root){    
    String dir = "";
    try{
        File[] file = new File(root).listFiles();
        int b = 0;
        while(!found && b<file.length){
        if(file[b].isDirectory() && !found){            
            if(file[b].toString().replace(root, "").substring(1).equals("Dapodik")){
                dapodir = file[b].toString();
                found=true;                
            }else{
                findDir(file[b].toString());
            }
        }
        b++;
    }
    }catch(Exception ex){

    }
    return dir;
    }
    public Injector(){        
        try{
            File[] root = File.listRoots();
            int a=0;
            while(a<root.length && !found){
                findDir(root[a].toString());
                a++;
            }            
            String dapoloc = dapodir+"\\dataweb\\apps\\vendor\\propel\\propel1\\runtime\\lib\\connection";            
            File[] file = new File(dapoloc).listFiles();
            boolean detect = false;
            for(int b=0;b<file.length;b++){
                String filename = file[b].toString().replace(dapoloc,"").substring(1);               
                if(filename.equals("PropelPDO.php")){
                    detect = true;                    
                    break;
                }
            }            
            String propelstring = "<?php\n" +
"\n" +
"/**\n" +
" * This file is part of the Propel package.\n" +
" * For the full copyright and license information, please view the LICENSE\n" +
" * file that was distributed with this source code.\n" +
" *\n" +
" * @license    MIT License\n" +
" */\n" +
"\n" +
"/**\n" +
" * PDO connection subclass that provides the basic fixes to PDO that are required by Propel.\n" +
" *\n" +
" * This class was designed to work around the limitation in PDO where attempting to begin\n" +
" * a transaction when one has already been begun will trigger a PDOException.  Propel\n" +
" * relies on the ability to create nested transactions, even if the underlying layer\n" +
" * simply ignores these (because it doesn't support nested transactions).\n" +
" *\n" +
" * The changes that this class makes to the underlying API include the addition of the\n" +
" * getNestedTransactionDepth() and isInTransaction() and the fact that beginTransaction()\n" +
" * will no longer throw a PDOException (or trigger an error) if a transaction is already\n" +
" * in-progress.\n" +
" *\n" +
" * @author     Cameron Brunner <cameron.brunner@gmail.com>\n" +
" * @author     Hans Lellelid <hans@xmpl.org>\n" +
" * @author     Christian Abegg <abegg.ch@gmail.com>\n" +
" * @since      2006-09-22\n" +
" * @package    propel.runtime.connection\n" +
" */\n" +
"class PropelPDO extends PDO\n" +
"{\n" +
"\n" +
"    /**\n" +
"     * Attribute to use to set whether to cache prepared statements.\n" +
"     */\n" +
"    const PROPEL_ATTR_CACHE_PREPARES = -1;\n" +
"\n" +
"    /**\n" +
"     * Attribute to use to set the connection name usefull for explains\n" +
"     */\n" +
"    const PROPEL_ATTR_CONNECTION_NAME = -2;\n" +
"\n" +
"    const DEFAULT_SLOW_THRESHOLD        = 0.1;\n" +
"    const DEFAULT_ONLYSLOW_ENABLED      = false;\n" +
"\n" +
"    /**\n" +
"     * The current transaction depth.\n" +
"     * @var       integer\n" +
"     */\n" +
"    protected $nestedTransactionCount = 0;\n" +
"\n" +
"    /**\n" +
"     * Cache of prepared statements (PDOStatement) keyed by md5 of SQL.\n" +
"     *\n" +
"     * @var       array  [md5(sql) => PDOStatement]\n" +
"     */\n" +
"    protected $preparedStatements = array();\n" +
"\n" +
"    /**\n" +
"     * Whether to cache prepared statements.\n" +
"     *\n" +
"     * @var       boolean\n" +
"     */\n" +
"    protected $cachePreparedStatements = false;\n" +
"\n" +
"    /**\n" +
"     * Whether the final commit is possible\n" +
"     * Is false if a nested transaction is rolled back\n" +
"     */\n" +
"    protected $isUncommitable = false;\n" +
"\n" +
"    /**\n" +
"     * Count of queries performed.\n" +
"     *\n" +
"     * @var       integer\n" +
"     */\n" +
"    protected $queryCount = 0;\n" +
"\n" +
"    /**\n" +
"     * SQL code of the latest performed query.\n" +
"     *\n" +
"     * @var       string\n" +
"     */\n" +
"    protected $lastExecutedQuery;\n" +
"\n" +
"    /**\n" +
"     * Whether or not the debug is enabled\n" +
"     *\n" +
"     * @var       boolean\n" +
"     */\n" +
"    public $useDebug = false;\n" +
"\n" +
"    /**\n" +
"     * Configured BasicLogger (or compatible) logger.\n" +
"     *\n" +
"     * @var       BasicLogger\n" +
"     */\n" +
"    protected $logger;\n" +
"\n" +
"    /**\n" +
"     * The log level to use for logging.\n" +
"     *\n" +
"     * @var       integer\n" +
"     */\n" +
"    private $logLevel = Propel::LOG_DEBUG;\n" +
"\n" +
"    /**\n" +
"     * The runtime configuration\n" +
"     *\n" +
"     * @var       PropelConfiguration\n" +
"     */\n" +
"    protected $configuration;\n" +
"\n" +
"    /**\n" +
"     * The connection name\n" +
"     *\n" +
"     * @var string\n" +
"     */\n" +
"    protected $connectionName;\n" +
"\n" +
"    /**\n" +
"     * The default value for runtime config item \"debugpdo.logging.methods\".\n" +
"     *\n" +
"     * @var       array\n" +
"     */\n" +
"    protected static $defaultLogMethods = array(\n" +
"        'PropelPDO::exec',\n" +
"        'PropelPDO::query',\n" +
"        'DebugPDOStatement::execute',\n" +
"    );\n" +
"\n" +
"    /**\n" +
"     * Creates a PropelPDO instance representing a connection to a database.\n" +
"     *.\n" +
"     * If so configured, specifies a custom PDOStatement class and makes an entry\n" +
"     * to the log with the state of this object just after its initialization.\n" +
"     * Add PropelPDO::__construct to $defaultLogMethods to see this message\n" +
"     *\n" +
"     * @param string $dsn            Connection DSN.\n" +
"     * @param string $username       The user name for the DSN string.\n" +
"     * @param string $password       The password for the DSN string.\n" +
"     * @param array  $driver_options A key=>value array of driver-specific connection options.\n" +
"     *\n" +
"     * @throws PDOException if there is an error during connection initialization.\n" +
"     */\n" +
"    public function __construct($dsn, $username = null, $password = null, $driver_options = array())\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            $debug = $this->getDebugSnapshot();\n" +
"        }\n" +
"		\n" +
"		file_put_contents(\"C:\\\\temp\\\\driver.log\", $dsn);\n" +
"\n" +
"        parent::__construct($dsn, $username, $password, $driver_options);\n" +
"\n" +
"        if ($this->useDebug) {\n" +
"            $this->configureStatementClass('DebugPDOStatement', true);\n" +
"            $this->log('Opening connection', null, __METHOD__, $debug);\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Inject the runtime configuration\n" +
"     *\n" +
"     * @param PropelConfiguration $configuration\n" +
"     */\n" +
"    public function setConfiguration($configuration)\n" +
"    {\n" +
"        $this->configuration = $configuration;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Get the runtime configuration\n" +
"     *\n" +
"     * @return PropelConfiguration\n" +
"     */\n" +
"    public function getConfiguration()\n" +
"    {\n" +
"        if (null === $this->configuration) {\n" +
"            $this->configuration = Propel::getConfiguration(PropelConfiguration::TYPE_OBJECT);\n" +
"        }\n" +
"\n" +
"        return $this->configuration;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Gets the current transaction depth.\n" +
"     *\n" +
"     * @return integer\n" +
"     */\n" +
"    public function getNestedTransactionCount()\n" +
"    {\n" +
"        return $this->nestedTransactionCount;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Set the current transaction depth.\n" +
"     * @param int $v The new depth.\n" +
"     */\n" +
"    protected function setNestedTransactionCount($v)\n" +
"    {\n" +
"        $this->nestedTransactionCount = $v;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Is this PDO connection currently in-transaction?\n" +
"     * This is equivalent to asking whether the current nested transaction count is greater than 0.\n" +
"     *\n" +
"     * @return boolean\n" +
"     */\n" +
"    public function isInTransaction()\n" +
"    {\n" +
"        return ($this->getNestedTransactionCount() > 0);\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Check whether the connection contains a transaction that can be committed.\n" +
"     * To be used in an evironment where Propelexceptions are caught.\n" +
"     *\n" +
"     * @return boolean True if the connection is in a committable transaction\n" +
"     */\n" +
"    public function isCommitable()\n" +
"    {\n" +
"        return $this->isInTransaction() && !$this->isUncommitable;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Overrides PDO::beginTransaction() to prevent errors due to already-in-progress transaction.\n" +
"     *\n" +
"     * @return boolean\n" +
"     */\n" +
"    public function beginTransaction()\n" +
"    {\n" +
"        $return = true;\n" +
"        if (!$this->nestedTransactionCount) {\n" +
"            $return = parent::beginTransaction();\n" +
"            if ($this->useDebug) {\n" +
"                $this->log('Begin transaction', null, __METHOD__);\n" +
"            }\n" +
"            $this->isUncommitable = false;\n" +
"        }\n" +
"        $this->nestedTransactionCount++;\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Overrides PDO::commit() to only commit the transaction if we are in the outermost\n" +
"     * transaction nesting level.\n" +
"     *\n" +
"     * @return boolean\n" +
"     *\n" +
"     * @throws PropelException\n" +
"     */\n" +
"    public function commit()\n" +
"    {\n" +
"        $return = true;\n" +
"        $opcount = $this->nestedTransactionCount;\n" +
"\n" +
"        if ($opcount > 0) {\n" +
"            if ($opcount === 1) {\n" +
"                if ($this->isUncommitable) {\n" +
"                    throw new PropelException('Cannot commit because a nested transaction was rolled back');\n" +
"                } else {\n" +
"                    $return = parent::commit();\n" +
"                    if ($this->useDebug) {\n" +
"                        $this->log('Commit transaction', null, __METHOD__);\n" +
"                    }\n" +
"                }\n" +
"            }\n" +
"\n" +
"            $this->nestedTransactionCount--;\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Overrides PDO::rollBack() to only rollback the transaction if we are in the outermost\n" +
"     * transaction nesting level\n" +
"     *\n" +
"     * @return boolean Whether operation was successful.\n" +
"     */\n" +
"    public function rollBack()\n" +
"    {\n" +
"        $return = true;\n" +
"        $opcount = $this->nestedTransactionCount;\n" +
"\n" +
"        if ($opcount > 0) {\n" +
"            if ($opcount === 1) {\n" +
"                $return = parent::rollBack();\n" +
"                if ($this->useDebug) {\n" +
"                    $this->log('Rollback transaction', null, __METHOD__);\n" +
"                }\n" +
"            } else {\n" +
"                $this->isUncommitable = true;\n" +
"            }\n" +
"\n" +
"            $this->nestedTransactionCount--;\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"    * Rollback the whole transaction, even if this is a nested rollback\n" +
"    * and reset the nested transaction count to 0.\n" +
"     *\n" +
"    * @return    boolean  Whether operation was successful.\n" +
"    */\n" +
"    public function forceRollBack()\n" +
"    {\n" +
"        $return = true;\n" +
"\n" +
"        if ($this->nestedTransactionCount) {\n" +
"            // If we're in a transaction, always roll it back\n" +
"            // regardless of nesting level.\n" +
"            $return = parent::rollBack();\n" +
"\n" +
"            // reset nested transaction count to 0 so that we don't\n" +
"            // try to commit (or rollback) the transaction outside this scope.\n" +
"            $this->nestedTransactionCount = 0;\n" +
"\n" +
"            if ($this->useDebug) {\n" +
"                $this->log('Rollback transaction', null, __METHOD__);\n" +
"            }\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Sets a connection attribute.\n" +
"     *\n" +
"     * This is overridden here to provide support for setting Propel-specific attributes too.\n" +
"     *\n" +
"     * @param integer $attribute The attribute to set (e.g. PropelPDO::PROPEL_ATTR_CACHE_PREPARES).\n" +
"     * @param mixed   $value     The attribute value.\n" +
"     *\n" +
"     * @return void\n" +
"     */\n" +
"    public function setAttribute($attribute, $value)\n" +
"    {\n" +
"        switch ($attribute) {\n" +
"            case self::PROPEL_ATTR_CACHE_PREPARES:\n" +
"                $this->cachePreparedStatements = $value;\n" +
"                break;\n" +
"            case self::PROPEL_ATTR_CONNECTION_NAME:\n" +
"                $this->connectionName = $value;\n" +
"                break;\n" +
"            default:\n" +
"                parent::setAttribute($attribute, $value);\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Gets a connection attribute.\n" +
"     *\n" +
"     * This is overridden here to provide support for setting Propel-specific attributes too.\n" +
"     *\n" +
"     * @param  integer $attribute The attribute to get (e.g. PropelPDO::PROPEL_ATTR_CACHE_PREPARES).\n" +
"     * @return mixed\n" +
"     */\n" +
"    public function getAttribute($attribute)\n" +
"    {\n" +
"        switch ($attribute) {\n" +
"            case self::PROPEL_ATTR_CACHE_PREPARES:\n" +
"                return $this->cachePreparedStatements;\n" +
"                break;\n" +
"            case self::PROPEL_ATTR_CONNECTION_NAME:\n" +
"                return $this->connectionName;\n" +
"                break;\n" +
"            default:\n" +
"                return parent::getAttribute($attribute);\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Prepares a statement for execution and returns a statement object.\n" +
"     *\n" +
"     * Overrides PDO::prepare() in order to:\n" +
"     *  - Add logging and query counting if logging is true.\n" +
"     *  - Add query caching support if the PropelPDO::PROPEL_ATTR_CACHE_PREPARES was set to true.\n" +
"     *\n" +
"     * @param string $sql            This must be a valid SQL statement for the target database server.\n" +
"     * @param array  $driver_options One $array or more key => value pairs to set attribute values\n" +
"     *                                      for the PDOStatement object that this method returns.\n" +
"     *\n" +
"     * @return PDOStatement\n" +
"     */\n" +
"    public function prepare($sql, $driver_options = array())\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            $debug = $this->getDebugSnapshot();\n" +
"        }\n" +
"\n" +
"        if ($this->cachePreparedStatements) {\n" +
"            if (!isset($this->preparedStatements[$sql])) {\n" +
"                $return = parent::prepare($sql, $driver_options);\n" +
"                $this->preparedStatements[$sql] = $return;\n" +
"            } else {\n" +
"                $return = $this->preparedStatements[$sql];\n" +
"            }\n" +
"        } else {\n" +
"            $return = parent::prepare($sql, $driver_options);\n" +
"        }\n" +
"\n" +
"        if ($this->useDebug) {\n" +
"            $this->log($sql, null, __METHOD__, $debug);\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Execute an SQL statement and return the number of affected rows.\n" +
"     * Overrides PDO::exec() to log queries when required\n" +
"     *\n" +
"     * @param  string  $sql\n" +
"     * @return integer\n" +
"     */\n" +
"    public function exec($sql)\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            $debug = $this->getDebugSnapshot();\n" +
"        }\n" +
"\n" +
"        $return = parent::exec($sql);\n" +
"\n" +
"        if ($this->useDebug) {\n" +
"            $this->log($sql, null, __METHOD__, $debug);\n" +
"            $this->setLastExecutedQuery($sql);\n" +
"            $this->incrementQueryCount();\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Executes an SQL statement, returning a result set as a PDOStatement object.\n" +
"     * Despite its signature here, this method takes a variety of parameters.\n" +
"     *\n" +
"     * Overrides PDO::query() to log queries when required\n" +
"     *\n" +
"     * @see       http://php.net/manual/en/pdo.query.php for a description of the possible parameters.\n" +
"     *\n" +
"     * @return PDOStatement\n" +
"     */\n" +
"    public function query()\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            $debug = $this->getDebugSnapshot();\n" +
"        }\n" +
"\n" +
"        $args = func_get_args();\n" +
"        if (version_compare(PHP_VERSION, '5.3', '<')) {\n" +
"            $return = call_user_func_array(array($this, 'parent::query'), $args);\n" +
"        } else {\n" +
"            $return = call_user_func_array('parent::query', $args);\n" +
"        }\n" +
"\n" +
"        if ($this->useDebug) {\n" +
"            $sql = $args[0];\n" +
"            $this->log($sql, null, __METHOD__, $debug);\n" +
"            $this->setLastExecutedQuery($sql);\n" +
"            $this->incrementQueryCount();\n" +
"        }\n" +
"\n" +
"        return $return;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Clears any stored prepared statements for this connection.\n" +
"     */\n" +
"    public function clearStatementCache()\n" +
"    {\n" +
"        $this->preparedStatements = array();\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Configures the PDOStatement class for this connection.\n" +
"     *\n" +
"     * @param string  $class\n" +
"     * @param boolean $suppressError Whether to suppress an exception if the statement class cannot be set.\n" +
"     *\n" +
"     * @throws PropelException if the statement class cannot be set (and $suppressError is false).\n" +
"     */\n" +
"    protected function configureStatementClass($class = 'PDOStatement', $suppressError = true)\n" +
"    {\n" +
"        // extending PDOStatement is only supported with non-persistent connections\n" +
"        if (!$this->getAttribute(PDO::ATTR_PERSISTENT)) {\n" +
"            $this->setAttribute(PDO::ATTR_STATEMENT_CLASS, array($class, array($this)));\n" +
"        } elseif (!$suppressError) {\n" +
"            throw new PropelException('Extending PDOStatement is not supported with persistent connections.');\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Returns the number of queries this DebugPDO instance has performed on the database connection.\n" +
"     *\n" +
"     * When using DebugPDOStatement as the statement class, any queries by DebugPDOStatement instances\n" +
"     * are counted as well.\n" +
"     *\n" +
"     * @throws PropelException if persistent connection is used (since unable to override PDOStatement in that case).\n" +
"     * @return integer\n" +
"     */\n" +
"    public function getQueryCount()\n" +
"    {\n" +
"        // extending PDOStatement is not supported with persistent connections\n" +
"        if ($this->getAttribute(PDO::ATTR_PERSISTENT)) {\n" +
"            throw new PropelException('Extending PDOStatement is not supported with persistent connections. Count would be inaccurate, because we cannot count the PDOStatment::execute() calls. Either don\\'t use persistent connections or don\\'t call PropelPDO::getQueryCount()');\n" +
"        }\n" +
"\n" +
"        return $this->queryCount;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Increments the number of queries performed by this DebugPDO instance.\n" +
"     *\n" +
"     * Returns the original number of queries (ie the value of $this->queryCount before calling this method).\n" +
"     *\n" +
"     * @return integer\n" +
"     */\n" +
"    public function incrementQueryCount()\n" +
"    {\n" +
"        $this->queryCount++;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Get the SQL code for the latest query executed by Propel\n" +
"     *\n" +
"     * @return string Executable SQL code\n" +
"     */\n" +
"    public function getLastExecutedQuery()\n" +
"    {\n" +
"        return $this->lastExecutedQuery;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Set the SQL code for the latest query executed by Propel\n" +
"     *\n" +
"     * @param string $query Executable SQL code\n" +
"     */\n" +
"    public function setLastExecutedQuery($query)\n" +
"    {\n" +
"        $this->lastExecutedQuery = $query;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Enable or disable the query debug features\n" +
"     *\n" +
"     * @param boolean $value True to enable debug (default), false to disable it\n" +
"     */\n" +
"    public function useDebug($value = true)\n" +
"    {\n" +
"        if ($value) {\n" +
"            $this->configureStatementClass('DebugPDOStatement', true);\n" +
"        } else {\n" +
"            // reset query logging\n" +
"            $this->setAttribute(PDO::ATTR_STATEMENT_CLASS, array('PDOStatement'));\n" +
"            $this->setLastExecutedQuery('');\n" +
"            $this->queryCount = 0;\n" +
"        }\n" +
"        $this->clearStatementCache();\n" +
"        $this->useDebug = $value;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Sets the logging level to use for logging method calls and SQL statements.\n" +
"     *\n" +
"     * @param integer $level Value of one of the Propel::LOG_* class constants.\n" +
"     */\n" +
"    public function setLogLevel($level)\n" +
"    {\n" +
"        $this->logLevel = $level;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Sets a logger to use.\n" +
"     *\n" +
"     * The logger will be used by this class to log various method calls and their properties.\n" +
"     *\n" +
"     * @param BasicLogger $logger A Logger with an API compatible with BasicLogger (or PEAR Log).\n" +
"     */\n" +
"    public function setLogger($logger)\n" +
"    {\n" +
"        $this->logger = $logger;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Gets the logger in use.\n" +
"     *\n" +
"     * @return BasicLogger A Logger with an API compatible with BasicLogger (or PEAR Log).\n" +
"     */\n" +
"    public function getLogger()\n" +
"    {\n" +
"        return $this->logger;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Logs the method call or SQL using the Propel::log() method or a registered logger class.\n" +
"     *\n" +
"     * @uses      self::getLogPrefix()\n" +
"     * @see       self::setLogger()\n" +
"     *\n" +
"     * @param string  $msg           Message to log.\n" +
"     * @param integer $level         Log level to use; will use self::setLogLevel() specified level by default.\n" +
"     * @param string  $methodName    Name of the method whose execution is being logged.\n" +
"     * @param array   $debugSnapshot Previous return value from self::getDebugSnapshot().\n" +
"     */\n" +
"    public function log($msg, $level = null, $methodName = null, array $debugSnapshot = null)\n" +
"    {\n" +
"        // If logging has been specifically disabled, this method won't do anything\n" +
"        if (!$this->getLoggingConfig('enabled', true)) {\n" +
"            return;\n" +
"        }\n" +
"\n" +
"        // If the method being logged isn't one of the ones to be logged, bail\n" +
"        if (!in_array($methodName, $this->getLoggingConfig('methods', self::$defaultLogMethods))) {\n" +
"            return;\n" +
"        }\n" +
"\n" +
"        // If a logging level wasn't provided, use the default one\n" +
"        if ($level === null) {\n" +
"            $level = $this->logLevel;\n" +
"        }\n" +
"\n" +
"        // Determine if this query is slow enough to warrant logging\n" +
"        if ($this->getLoggingConfig(\"onlyslow\", self::DEFAULT_ONLYSLOW_ENABLED)) {\n" +
"            $now = $this->getDebugSnapshot();\n" +
"            if ($now['microtime'] - $debugSnapshot['microtime'] < $this->getLoggingConfig(\"details.slow.threshold\", self::DEFAULT_SLOW_THRESHOLD)) return;\n" +
"        }\n" +
"\n" +
"        // If the necessary additional parameters were given, get the debug log prefix for the log line\n" +
"        if ($methodName && $debugSnapshot) {\n" +
"            $msg = $this->getLogPrefix($methodName, $debugSnapshot) . $msg;\n" +
"        }\n" +
"\n" +
"        // We won't log empty messages\n" +
"        if (!$msg) {\n" +
"            return;\n" +
"        }\n" +
"\n" +
"        // Delegate the actual logging forward\n" +
"        if ($this->logger) {\n" +
"            $this->logger->log($msg, $level);\n" +
"        } else {\n" +
"            Propel::log($msg, $level);\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Returns a snapshot of the current values of some functions useful in debugging.\n" +
"     *\n" +
"     * @return array\n" +
"     *\n" +
"     * @throws PropelException\n" +
"     */\n" +
"    public function getDebugSnapshot()\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            return array(\n" +
"                'microtime'             => microtime(true),\n" +
"                'memory_get_usage'      => memory_get_usage($this->getLoggingConfig('realmemoryusage', false)),\n" +
"                'memory_get_peak_usage' => memory_get_peak_usage($this->getLoggingConfig('realmemoryusage', false)),\n" +
"                );\n" +
"        } else {\n" +
"            throw new PropelException('Should not get debug snapshot when not debugging');\n" +
"        }\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Returns a named configuration item from the Propel runtime configuration, from under the\n" +
"     * 'debugpdo.logging' prefix.  If such a configuration setting hasn't been set, the given default\n" +
"     * value will be returned.\n" +
"     *\n" +
"     * @param string $key          Key for which to return the value.\n" +
"     * @param mixed  $defaultValue Default value to apply if config item hasn't been set.\n" +
"     *\n" +
"     * @return mixed\n" +
"     */\n" +
"    protected function getLoggingConfig($key, $defaultValue)\n" +
"    {\n" +
"        return $this->getConfiguration()->getParameter(\"debugpdo.logging.$key\", $defaultValue);\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Returns a prefix that may be prepended to a log line, containing debug information according\n" +
"     * to the current configuration.\n" +
"     *\n" +
"     * Uses a given $debugSnapshot to calculate how much time has passed since the call to self::getDebugSnapshot(),\n" +
"     * how much the memory consumption by PHP has changed etc.\n" +
"     *\n" +
"     * @see       self::getDebugSnapshot()\n" +
"     *\n" +
"     * @param string $methodName    Name of the method whose execution is being logged.\n" +
"     * @param array  $debugSnapshot A previous return value from self::getDebugSnapshot().\n" +
"     *\n" +
"     * @return string\n" +
"     */\n" +
"    protected function getLogPrefix($methodName, $debugSnapshot)\n" +
"    {\n" +
"        $config = $this->getConfiguration()->getParameters();\n" +
"        if (!isset($config['debugpdo']['logging']['details'])) {\n" +
"            return '';\n" +
"        }\n" +
"        $prefix     = '';\n" +
"        $logDetails = $config['debugpdo']['logging']['details'];\n" +
"        $now        = $this->getDebugSnapshot();\n" +
"        $innerGlue  = $this->getLoggingConfig('innerglue', ': ');\n" +
"        $outerGlue  = $this->getLoggingConfig('outerglue', ' | ');\n" +
"\n" +
"        // Iterate through each detail that has been configured to be enabled\n" +
"        foreach ($logDetails as $detailName => $details) {\n" +
"\n" +
"            if (!$this->getLoggingConfig(\"details.$detailName.enabled\", false)) {\n" +
"                continue;\n" +
"            }\n" +
"\n" +
"            switch ($detailName) {\n" +
"\n" +
"                case 'slow';\n" +
"                    $value = $now['microtime'] - $debugSnapshot['microtime'] >= $this->getLoggingConfig('details.slow.threshold', self::DEFAULT_SLOW_THRESHOLD) ? 'YES' : ' NO';\n" +
"                    break;\n" +
"\n" +
"                case 'time':\n" +
"                    $value = number_format($now['microtime'] - $debugSnapshot['microtime'], $this->getLoggingConfig('details.time.precision', 3)) . ' sec';\n" +
"                    $value = str_pad($value, $this->getLoggingConfig('details.time.pad', 10), ' ', STR_PAD_LEFT);\n" +
"                    break;\n" +
"\n" +
"                case 'mem':\n" +
"                    $value = self::getReadableBytes($now['memory_get_usage'], $this->getLoggingConfig('details.mem.precision', 1));\n" +
"                    $value = str_pad($value, $this->getLoggingConfig('details.mem.pad', 9), ' ', STR_PAD_LEFT);\n" +
"                    break;\n" +
"\n" +
"                case 'memdelta':\n" +
"                    $value = $now['memory_get_usage'] - $debugSnapshot['memory_get_usage'];\n" +
"                    $value = ($value > 0 ? '+' : '') . self::getReadableBytes($value, $this->getLoggingConfig('details.memdelta.precision', 1));\n" +
"                    $value = str_pad($value, $this->getLoggingConfig('details.memdelta.pad', 10), ' ', STR_PAD_LEFT);\n" +
"                    break;\n" +
"\n" +
"                case 'mempeak':\n" +
"                    $value = self::getReadableBytes($now['memory_get_peak_usage'], $this->getLoggingConfig('details.mempeak.precision', 1));\n" +
"                    $value = str_pad($value, $this->getLoggingConfig('details.mempeak.pad', 9), ' ', STR_PAD_LEFT);\n" +
"                    break;\n" +
"\n" +
"                case 'querycount':\n" +
"                    $value = str_pad($this->getQueryCount(), $this->getLoggingConfig('details.querycount.pad', 2), ' ', STR_PAD_LEFT);\n" +
"                    break;\n" +
"\n" +
"                case 'method':\n" +
"                    $value = str_pad($methodName, $this->getLoggingConfig('details.method.pad', 28), ' ', STR_PAD_RIGHT);\n" +
"                    break;\n" +
"\n" +
"                case 'connection':\n" +
"                    $value = $this->connectionName;\n" +
"                    break;\n" +
"\n" +
"                default:\n" +
"                    $value = 'n/a';\n" +
"                    break;\n" +
"\n" +
"            }\n" +
"\n" +
"            $prefix .= $detailName . $innerGlue . $value . $outerGlue;\n" +
"\n" +
"        }\n" +
"\n" +
"        return $prefix;\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * Returns a human-readable representation of the given byte count.\n" +
"     *\n" +
"     * @param integer $bytes     Byte count to convert.\n" +
"     * @param integer $precision How many decimals to include.\n" +
"     *\n" +
"     * @return string\n" +
"     */\n" +
"    protected function getReadableBytes($bytes, $precision)\n" +
"    {\n" +
"        $suffix = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');\n" +
"        $total = count($suffix);\n" +
"\n" +
"        for ($i = 0; $bytes > 1024 && $i < $total; $i++) {\n" +
"            $bytes /= 1024;\n" +
"        }\n" +
"\n" +
"        return number_format($bytes, $precision) . ' ' . $suffix[$i];\n" +
"    }\n" +
"\n" +
"    /**\n" +
"     * If so configured, makes an entry to the log of the state of this object just prior to its destruction.\n" +
"     * Add PropelPDO::__destruct to $defaultLogMethods to see this message\n" +
"     *\n" +
"     * @see       self::log()\n" +
"     */\n" +
"    public function __destruct()\n" +
"    {\n" +
"        if ($this->useDebug) {\n" +
"            $this->log('Closing connection', null, __METHOD__, $this->getDebugSnapshot());\n" +
"        }\n" +
"    }\n" +
"}";        
            PrintWriter ss = new PrintWriter(dapoloc+"\\PropelPDO.php", "UTF-8");
            if(detect){
                new File(dapoloc+"\\PropelPDO.php").delete();
            }
            
            ss.println(propelstring);
            ss.close();
            
        }catch(NullPointerException ex){
            ex.printStackTrace();
        }catch(Exception ex){
            ex.printStackTrace();
        }
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        new Injector();
    }    
}