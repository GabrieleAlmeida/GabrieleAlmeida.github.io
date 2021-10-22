<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product List</title>
</head>

<body>

    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand">Product List</a>
                <form class="form-inline">
                    <button type="button" class="btn btn-outline-dark">ADD</button>
                    <button id="delete-button-btn" type="button" class="btn btn-outline-dark">MASS DELETE</button>
                </form>
            </nav>
        </div>

    </header>

    <!--<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <button type="button" class="btn btn-outline-dark">ADD</button>
            <button id="delete-button-btn" type="button" class="btn btn-outline-dark">MASS DELETE</button>
        </form>
    </nav>-->

    <hr>

    <section class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="card-title">
                    <input class="form-check-input delete-checkbox" type="checkbox" value="">
                </div>
                <ul class="card-text">
                    <li>SKU</li>
                    <li>Name</li>
                    <li>Price</li>
                    <li>Product Atribute: values </li>
                </ul>
            </div>
        </div>
    </section>

    <hr>

    <footer>
        <div id="footer-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Scandiweb Test Assignment</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>

</html>