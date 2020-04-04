<?php
/**
 * Author: Luiz Schmitt <lzschmitt@gmail.com>
 * github: https://github.com/luizschmitt
 * 
 * PDO Clone for use exclusive only OCI.
 */

class PDOCI extends PDOCIStatement
{
  protected $oci;
  protected $statement;

  const SM_DEFAULT = OCI_DEFAULT;
  const SM_SYSOPER = OCI_SYSOPER;
  const SM_SYSDBA  = OCI_SYSDBA;

  const FETCH_ASSOC = OCI_ASSOC+OCI_RETURN_NULLS;

  public function __construct(string $dsn, string $username, string $passwd, array $options = [])
  {
    $character_set = $options['character_set'] ?? $options['charset'] ?? 'utf8';
    $session_mode = $options['session_mode'] ?? PDOCI::SM_DEFAULT;

    $this->oci = oci_connect($username, $passwd, $dsn, $character_set, $session_mode);

    if (!$this->oci) {
      throw new PDOCIException("ERROR to connect database :" . oci_error()['message']);
    }

    return $this->oci;
  }

  public function __destruct()
  {
    oci_close($this->oci);
  }

  public function beginTransaction() :bool
  {
    return false;
  }

  public function commit() :bool
  {
    return false;
  }

  public function rollback() :bool
  {
    return false;
  }

  public function errorCode() :string
  {
    return 'string';
  }

  public function errorInfo() :array 
  {
    return [];
  }

  public function exec(string $statement = null) :int
  {
    return oci_execute($this->statement);
  }

  public function getAttribute(int $attribute) //mixed
  {
    
  }

  public static function getAvailableDrivers() :array
  {
    return [];
  }

  public function inTransaction() :bool
  {
    return false;
  }

  public function lastInsertId(string $name = null) : string
  {
    return 'aaa';
  }

  public function prepare(string $statement, array $driver_options =[]) :PDOCIStatement
  {
    $this->queryString = $statement;
    $this->statement = oci_parse($this->oci, $statement);
    return $this;
  }

  public function query(string $statement) :PDOCIStatement
  {

  }

  public function quote(string $string, int $parameter_type = PDOCI::PARAM_STR) :string
  {
    return '222';
  }

  public function setAttribute(int $attribute, $value) :bool
  {
    return false;
  }
}