<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento con firma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Título del documento</h1>
        <strong>Simple documento para demostrar cómo se puede colocar una firma del usuario</strong>
        <p>Lorem ipsum dolor sit amet  consectetur adipisicing elit. Et magnam eius reprehenderit repudiandae,
            veritatis aliquid a iste! Eos necessitatibus omnis maiores doloremque? Ipsam rem omnis saepe architecto
            quam molestias asperiores.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam unde veritatis, aut exercitationem in
            voluptatum aliquid rem deleniti non quas dignissimos asperiores laborum omnis similique esse, neque autem
            sit possimus.</p>
        <p>Quos veniam incidunt animi distinctio, itaque voluptate laudantium voluptates doloribus ipsa praesentium
            qui veritatis perferendis rerum dicta a, non esse cupiditate nemo mollitia exercitationem nesciunt
            explicabo, debitis dolores. Mollitia, similique.</p>
        <p>Deleniti sapiente rem beatae officia libero similique iste, vitae aut? Voluptatum aperiam fugit placeat
            adipisci, consequatur reiciendis voluptatem eius dolore qui. Cumque delectus iste earum, explicabo error
            quas rerum nam!</p>
        <p>Porro tempore ipsa enim a dolore explicabo totam. Quos veniam repellendus quo excepturi voluptatibus eum
            provident corrupti debitis nesciunt neque ipsa, consequatur qui illo perferendis mollitia omnis sit cum
            sunt.</p>
        <p>Aliquid saepe quod recusandae at adipisci veniam quasi delectus maiores magni fuga accusamus ex, facere,
            vero voluptatem temporibus odit maxime. Fuga assumenda suscipit repellat sapiente, porro sit repudiandae
            doloremque officiis.</p>
        <h2>A continuación la firma</h2>
    <img src="" alt="Firma del usuario" id="firma">
    <br>
    <script>
        if (window.opener) {
            document.querySelector("#firma").src = window.opener.obtenerImagen();
            // Imprimir documento. Si no quieres imprimir, remueve la siguiente línea
            window.print();
        }
    </script>
</body>

</html>