<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROMOS</title>
    <link rel="stylesheet" href="../style/stylesCromos.css">

    <?php include('../php_partials/bootstrap.php'); ?>

</head>

<body>
    <?php
    include('../php_partials/menu.php');
    ?>

    <style>
        .card {
            border: 3px solid;
        }

        body {
            background-image: url('../media/imagenDeFondo.jpg');
        }
    </style>

    <div class="container mb-4">
        <div class="row" row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5>
            <div class="col-md-4">
                <div class="card  mt-4" style="background-color: #78C91A;">
                    <img src="../media/001.png" class="card-img-top" alt="Imagen del Pokémon 1">
                    <div class="card-body">
                        <strong class="card-title">001-Bulbasur</strong>
                        <div class="card-text">
                            <span class="badge text-bg-success">Planta</span>
                            <span class="badge text-bg-warning">Veneno</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card  mt-4" style="background-color: #78C91A;">
                    <img src="../media/002.png" class="card-img-top" alt="Imagen del Pokémon 2">
                    <div class="card-body">
                        <strong class="card-title">002-Ivysaur</strong>
                        <div class="card-text">
                            <span class="badge text-bg-success">Planta</span>
                            <span class="badge text-bg-warning">Veneno</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #78C91A;">
                    <img src="../media/003.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">003-Venusaur</strong>
                        <div class="card-text">
                            <span class="badge text-bg-success">Planta</span>
                            <span class="badge text-bg-warning">Veneno</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #F0A456;">
                    <img src="../media/004.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">004-Charmander</strong>
                        <div class="card-text">
                            <span class="badge text-bg-danger">Fuego</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #F0A456;">
                    <img src="../media/005.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">005-Charmeleon</strong>
                        <div class="card-text">
                            <span class="badge text-bg-danger">Fuego</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #F0A456;">
                    <img src="../media/006.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">006-Charizard</strong>
                        <div class="card-text">
                            <span class="badge text-bg-danger">Fuego</span>
                            <span class="badge text-bg-info">Volador</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #4EBDF0;">
                    <img src="../media/007.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">007-Squirtle</strong>
                        <div class="card-text">
                            <span class="badge text-bg-primary">Agua</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #4EBDF0;">
                    <img src="../media/008.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">008-Wartortle</strong>
                        <div class="card-text">
                            <span class="badge text-bg-primary">Agua</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-4" style="background-color: #4EBDF0;">
                    <img src="../media/009.png" class="card-img-top" alt="Imagen del Pokémon 3">
                    <div class="card-body">
                        <strong class="card-title">009-Blastoise</strong>
                        <div class="card-text">
                            <span class="badge text-bg-primary">Agua</span>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <input type="hidden" value="edit" name="edit" />
                                </button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    <input type="hidden" value="delete" name="delete" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class=" z-index-100 position-fixed bottom-0 end-0" style=" z-index:100px; padding:10px">
            <a href="/cromos/php_views/formulario_pokemon.php">
                <img src="/cromos/media/pokeBolaAdd.png">
            </a>
        </div>




</body>

</html>