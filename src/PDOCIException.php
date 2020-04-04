<?php

class PDOCIException extends RuntimeException
{
  public array $errorInfo;
}