
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
  <?php require_once './src/views/components/HeaderView.php'; ?>

  <main class="main">
    <section class="main--wrapper">
      <?php require_once './src/views/components/SidebarView.php'; ?>
      <?php require_once './src/views/components/ProductsList.php'; ?>
    </section>
  </main>

  <?php require_once './src/views/components/FooterView.php'; ?>
</body>
</html>