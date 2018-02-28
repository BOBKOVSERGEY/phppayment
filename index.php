<?php require_once __DIR__ . '/inc/functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="interkassa-verification" content="71a93d5b294747fa6357f972f862bcca" />
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>
</header>
<section class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">1 000 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="1000" data-product="Товар 1" data-img="images/img-product-1.jpg">Купить</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">1 200 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="1200" data-product="Товар 2" data-img="images/img-product-1.jpg">Купить</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">1 400 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="1400" data-product="Товар 3" data-img="images/img-product-1.jpg">Купить</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 4</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">1 600 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="1600" data-product="Товар 4" data-img="images/img-product-2.jpg">Купить</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 5</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">1 800 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="1800" data-product="Товар 5" data-img="images/img-product-2.jpg">Купить</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="products__item-img" src="images/img-product-2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Товар 6</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="product__item-price text-danger">2 000 руб.</p>
            <a href="#" class="btn btn-primary product__item-btn-buy" data-price="2000" data-product="Товар 6" data-img="images/img-product-2.jpg">Купить</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="cart">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Оформление заказа</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal__wrap-img">
          <img class="modal__img" src="" alt="">
        </div>
        <form id="buy" method="post">
          <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
          </div>
          <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Ваш email" required>
          </div>
          <div class="form-group">
            <label for="product">Выбранный товар</label>
            <input type="text" name="product" class="form-control" id="product" readonly>
          </div>
          <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control" id="price" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Купить</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>