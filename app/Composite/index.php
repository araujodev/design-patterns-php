<?php

use DesignPatterns\Composite\Directory;
use DesignPatterns\Composite\File;

require_once '../../vendor/autoload.php';

/**
 *
 * composite Usage.
 *
 */

$pastaCursos = new Directory("Pasta de Cursos");

$cursoDePHP = new File("CursoPHP.zip");
$cursoDeJava = new File("CursoJava.zip");
$cursoDeJS = new File("CursoJS.zip");

$pastaCursos->add($cursoDePHP);
$pastaCursos->add($cursoDeJava);
$pastaCursos->add($cursoDeJS);

$pastaAulasEAD = new Directory("Pasta de EAD");

$eadAula1 = new File('EadAula1.docx');
$eadAula2 = new File('EadAula2.pdf');

$pastaAulasEAD->add($eadAula1);
$pastaAulasEAD->add($eadAula2);

$pastaCursos->add($pastaAulasEAD);

$pastaCursos->ls();