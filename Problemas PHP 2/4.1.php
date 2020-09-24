<?php




    $promTotal = 0;
    $grupos = $_REQUEST['grupos'];
    for ($g=1;$g<=$grupos;$g++)
    {
        $promGrupo = 0;
        $alumnos = $_REQUEST['alumnos'];
        for ($m=1;$m<=$alumnos;$m++)
        {

            $promAlumno = 0;
            $materias = $_REQUEST['materias'];
            for ($j=1;$j<=$materias;$j++)
                {
                    
                    $promMateria = 0;
                    for ($i=1;$i<=3;$i++)
                        {
                        $nota = rand (50,100);
                        $promMateria = $promMateria + $nota;
                        }
                    
                    $promMateria = $promMateria/3;
                    echo " El promedio de la materia $j es: $promMateria <br>";
                    $promAlumno = $promAlumno + $promMateria;
                }
            $promAlumno = $promAlumno / $materias;
            echo " El promedio del Alumno $m es: $promAlumno <br>";
            $promGrupo = $promGrupo + $promAlumno;
        }                       
        $promGrupo = $promGrupo/$alumnos;
        echo " El promedio del grupo es: $promGrupo <br>";
        $promTotal = $promTotal + $promGrupo;
    }    
    $promTotal = $promTotal/$grupos;
    echo " El promedio del total de los grupos es: $promTotal";

?>
