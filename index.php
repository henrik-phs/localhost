<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>localhost</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        
        <style>
            .thumbnail{
                padding: 2%;
                margin: 20px;
            }
            .jumbotron{
                padding: 2%;
            }
            iframe{
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="container jumbotron">
            <h1>localhost</h1>
            <div class="row">
                <div class="col-md-4 thumbnail">
                    
                        <?php
                            /*$pasta = './';

                            if(is_dir($pasta)){
                                $diretorio = dir($pasta);

                            while(($arquivo = $diretorio->read()) !== false){
                                echo '<a href='.$pasta.$arquivo.'>'.$arquivo.'</a><br />';
                            }

                                $diretorio->close();
                            }else{
                                echo 'A pasta não existe.';
                            }*/
                        
                        //declara a função
	function list_files($dir)
	{
		// verifica se a é um diretório
		if(is_dir($dir))
		{
 
			//abre o diretorio
			if($handle = opendir($dir))
			{
 
				// percorre os registros do diretorio
				while(($file = readdir($handle)) !== false)
				{
 
					if($file != "." && $file != ".." && $file != "Thumbs.db")
					{
						//monta um link com o nome do arquivo
						echo '<a href="'.$dir.$file.'" id="'.$file.'" target="InlineFrame1">'.$file.'</a><br>'."\n";
					}
				}
				closedir($handle);
			}
		}
	}
 

 
	$root = './';
 
	list_files($root);
 
                        ?>
                    <p><a href="info.php" target="InlineFrame1">phpinfo()</a></p>
                </div>
                <div class="col-md-7 thumbnail">
                    <iframe name="InlineFrame1" height="400" class="container" id="InlineFrame1" src="<?php list_files($root); ?>"></iframe>
                </div>
            </div>
        </div>
    </body>
</html>
