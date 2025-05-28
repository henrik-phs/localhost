<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>localhost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <style>
        iframe {
            border: none;
            border-radius: 0 10px 10px 0;
        }

        /* Custom scrollbar for iframe (Webkit browsers) */
        iframe::-webkit-scrollbar {
            width: 10px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        iframe::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        iframe::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .svg-icon {
            width: 15px;
        }

        .icon-file {
            fill: rgb(255, 7, 110);
        }

        .icon-directory {
            fill: rgb(0, 123, 255);
        }

        .navigation-bar {
            max-width: 500px;
            overflow: auto;
            padding: 20px;
            background-color: rgb(224, 225, 226);
            border-radius: 10px 0 0 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Localhost</h1>
        <hr>

        <div class="row">
            <div class="col-md-3 navigation-bar">
                <p>Selecione um arquivo para visualizar:</p>
                <?php
                //declara a função
                function list_files($dir)
                {
                    // verifica se a é um diretório
                    if (is_dir($dir)) {

                        //abre o diretorio
                        if ($handle = opendir($dir)) {

                            // percorre os registros do diretorio
                            while (($file = readdir($handle)) !== false) {

                                if ($file != "." && $file != ".." && $file != "Thumbs.db") {
                                    if (is_dir($dir . $file)) {
                                        echo '<p><b><a href="' . $dir . $file . '" id="' . $file . '" target="InlineFrame1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-icon icon-directory"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z" />
                                        </svg> ' . $file . '</a> &nbsp; &nbsp;
                                        <a href="' . $dir . $file . '" id="' . $file . '" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-icon"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                                        </a>
                                        </b></p>';
                                    } else {
                                        //monta um link com o nome do arquivo
                                        echo '<p><a href="' . $dir . $file . '" id="' . $file . '" target="InlineFrame1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-icon icon-file"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z"/></svg> '
                                            . $file . '</a>
                                            &nbsp; &nbsp;
                                            <a href="' . $dir . $file . '" id="' . $file . '" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-icon"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                                            </a>
                                            </p>';
                                    }
                                }
                            }
                            closedir($handle);
                        }
                    }
                }

                $root = './';

                list_files($root);

                ?>
                <p>
                    <a href="info.php" target="InlineFrame1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-icon icon-file"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z" />
                        </svg> phpinfo()
                    </a>

                    &nbsp; &nbsp;
                    <a href="info.php" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-icon"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z" />
                        </svg>
                    </a>
                </p>
            </div>

            <div class="col-md-9">
                <iframe name="InlineFrame1" height="500" width="100%" id="InlineFrame1"></iframe>
            </div>
        </div>
    </div>
</body>

</html>
