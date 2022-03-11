<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <article class="container-fluid">
        <section class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-center my-3">Esto es una prueba</h1>
                <table class="table table-hover crud-table">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Código Dane</th>
                            <th>Código Municipio</th>
                            <th>Municipio</th>
                            <th>Código Departamento</th>
                            <th>Nombre Departamento</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>
        <template id="crud-template">
            <tr>
                <td class="codDane"></td>
                <td class="codMunicipio"></td>
                <td class="municipio"></td>
                <td class="codDepartamento"></td>
                <td class="departamento"></td>
            </tr>
        </template>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        
        //Variables y constantes

        const d = document,
        $table = d.querySelector(".crud-table"),
        $template = d.getElementById("crud-template").content,
        $fragment = d.createDocumentFragment();

        //Métodos
        
        const getAll = async () => {
            try 
            {
                let res = await fetch("https://desarrollo.bextramites.com/ws/api/wsprueba"),
                json = await res.json();

                if(!res.ok) throw {
                    status: res.status,
                    statusText: res.statusText
                };

                console.log(json);

                json.forEach(el => {
                    $template.querySelector(".codDane").textContext = el.codmpiodane;
                    $template.querySelector(".codMunicipio").textContext = el.codmpio;
                    $template.querySelector(".municipio").textContext = el.nommpio;
                    $template.querySelector(".codDepartamento").textContext = el.coddpto;
                    $template.querySelector(".departamento").textContext = el.nomdpto;

                    let $clone = d.importNode($template, true);
                    $fragment.appendChild($clone);
                });

                $table.querySelector("tbody").appendChild($fragment);
            } 
            catch (error) 
            {
                let message = error.statusText || "Ocurrió un error";
                $table.insertAdjacentHTML("afterend", `<p><strong>${error.status}: ${message}</strong></p>`);
            }
        }

        d.addEventListener("DOMContentLoaded", getAll);


    </script>
</body>

</html>