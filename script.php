<?php
$categoria = [];

$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria []=  'Adulto';

//print_r($categoria);

$nome = $_POST('nome');
$idade = $_POST('idade');

var_dump(($nome));
var_dump($idade);

return 0;
if($idade >=6 && $idade <=12)
{
        //echo 'Infantil';

    for ($i = 0 ; $i <= $categoria; $i ++)
    {
        
        if($categoria[$i] == 'Infantil')
       // echo 'O nadador ' , $nome , 'Compete na categoria Infantil';
        //ou
        echo 'O nadador ' , $nome , 'Compete na categoria' , $categoria[$i];
    }
}

else if ($idade >=13 && $idade <=18)
{
    //echo 'Adolescente';
    for ($i = 0 ; $i <= $categoria; $i ++)
    {
        
        if($categoria[$i] == 'Adolescente')
            echo 'O nadador ' , $nome , 'Compete na categoria Adolescente';
    }

}
else{
    //echo 'Adulto';

    for ($i = 0 ; $i <= $categoria; $i ++)
    {
        
        if($categoria[$i] == 'Adulto')
            echo 'O nadador ' , $nome , 'Compete na categoria Adulto';
    }
}
