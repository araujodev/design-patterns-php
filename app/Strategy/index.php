<?php

use DesignPatterns\Strategy\Connections\MicrosoftSqlServerDB;
use DesignPatterns\Strategy\Connections\MysqlDB;

require_once '../../vendor/autoload.php';

/**
 *
 * strategy Usage.
 *
 */

$bancoDeDadosMysql = new MysqlDB();

echo $bancoDeDadosMysql->connect();
echo "<br>";
echo $bancoDeDadosMysql->save();
echo "<br>";
echo $bancoDeDadosMysql->save(1);
echo "<br>";
echo $bancoDeDadosMysql->read();
echo "<br>";
echo $bancoDeDadosMysql->delete(2);

echo "<hr/>";

$bancoDeDadosSqlServer = new MicrosoftSqlServerDB();

echo $bancoDeDadosSqlServer->connect();
echo "<br>";
echo $bancoDeDadosSqlServer->save();
echo "<br>";
echo $bancoDeDadosSqlServer->save(1);
echo "<br>";
echo $bancoDeDadosSqlServer->read();
echo "<br>";
echo $bancoDeDadosSqlServer->delete(2);
