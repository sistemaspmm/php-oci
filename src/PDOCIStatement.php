<?php

class PDOCIStatement
{
  protected string $queryString;

  public function bindColumn($column, &$param, int $type, int $maxlen, $driverdata) :bool
  {
    return false;
  }

  public function bindParam($parameter, &$variable, int $data_type = PDOCI::PARAM_STR, int $length, $driver_options) :bool
  {
    return false;
  }

  public function closeCursor() :bool
  {
    return false;
  }

  public function columnCount() :int
  {
    return 1;
  }

  public function debugDumpParams() :void
  {

  }

  public function errorCode() :string
  {
    return '111';
  }

  public function errorInfo() :array
  {
    return [];
  }

  public function execute(array $input_arameters) :bool
  {
    return false;
  }

  public function fetch(int $fetch_style, int $cursor_orientatio = PDOCI::FETCH_ORI_NEXT, int $cursor_offset = 0)
  {
    return oci_fetch_array($this->statement, OCI_ASSOC+OCI_RETURN_NULLS);
  }

  public function fetchAll(int $fetch_style = PDOCI::FETCH_ASSOC, $fetch_argument = null, array $ctor_args = []) :array
  {
    while ($row = oci_fetch_array($this->statement, $fetch_style)) {
      $data[] = $row;
    }

    return $data;
  }

  public function fetchColumn(int $column_number = 0)
  {

  }

  public function fetchObject(string $class_name = "stdClass", array $ctor_args)
  {

  }

  public function getAttribute(int $attribute)
  {

  }

  public function getColumnMeta(int $column) :array
  {
    return [];
  }

  public function nextRowset() :bool
  {
    return false;
  }

  public function rowCount() :int
  {
    return 1;
  }

  public function setAttribute(int $attribute, $value) :bool
  {
    return false;
  }

  public function setFetchMode(int $mode) :bool
  {
    return false;
  }
}