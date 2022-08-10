<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Responsive Drop-down Menu Bar</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="file:///E:/jquery.js"></script>
</head>

<body>
  <nav>
    <div class="logo">X-Coffee</div>
    <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
      <li><a href="#">Home</a></li>
      <li>
        <label for="btn-1" class="show">Features +</label>
        <a href="#">Produk</a>
        <input type="checkbox" id="btn-1">
        <ul>
          <li><a href="#">Coffee</a></li>
          <li><a href="#">Food</a></li>

        </ul>
      </li>
      <li>
        <label for="btn-2" class="show">Services +</label>
        <a href="#">Manage</a>
        <input type="checkbox" id="btn-2">
        <ul>
          <li><a href="#">Admin</a></li>
          <li><a href="#">Produk</a></li>
          <li>
            <label for="btn-3" class="show">More +</label>
            <a href="#">More <span class="fa fa-plus"></span></a>
            <input type="checkbox" id="btn-3">
            <ul>
              <li><a href="#">Submenu-1</a></li>
              <li><a href="#">Submenu-2</a></li>
              <li><a href="#">Submenu-3</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Laporan</a></li>

    </ul>
  </nav>
  <div class="content">
    <header></header>
    <p></p>
  </div>
  <script>
    $('.icon').click(function() {
      $('span').toggleClass("cancel");
    });
  </script>

</body>

</html>