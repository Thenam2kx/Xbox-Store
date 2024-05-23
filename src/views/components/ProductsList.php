<?php
  // require_once './src/core/Database.php';
  $host = 'localhost';
    $dbname = 'xbog-store';
    $username = 'root';
    $password = '';

    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
      echo 'Connection fail'.$err->getMessage();
    }
?>
<section class="products">
  <div class="products--list">

    <?php
      $sql = "SELECT * FROM `products` WHERE 1";
      $stmt = $conn->query($sql);
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $row) {
        echo '
        <div class="products--list--item">
          <div class="prdImg">
            <img src="'.$row['Thumbnail'].'" alt="">
          </div>
          <div class="prdInfo">
            <h4 class="prdInfo__title">'.$row['ProductName'].'</h4>
            <div class="prdInfo--stars">
              <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
              <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
              <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
              <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
              <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
            </div>
            <div class="prdInfo--price">
              <p class="prdInfo--price__unitPrice">'.number_format($row['UnitPrice'], 0, ',', '.').'<sup>₫</sup></p>
              <p class="prdInfo--price--discountPrice">
                <span class="percent">-'.$row['Discount'].'%</span>
                <span class="price">'.number_format(($row['UnitPrice'] * 100) / $row['Discount'], 0, ',', '.').'<sup>₫</sup></span>
              </p>
            </div>
          </div>
        </div>
        ';
      }

    
    ?>

<!-- 
    <div class="products--list--item">
      <div class="prdImg">
        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/2e/08/0e/81b0307252e726ce33e9ae1f0433502e.png" alt="">
      </div>
      <div class="prdInfo">
        <h4 class="prdInfo__title">Màn hình MSI PRO MP241X 23.8 inch FHD/VA 75Hz - Hàng Chính Hãng</h4>
        <div class="prdInfo--stars">
          <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
          <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
          <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
          <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
          <img width="12" height="12" src="https://img.icons8.com/emoji/48/star-emoji.png" alt="star-emoji"/>
        </div>
        <div class="prdInfo--price">
          <p class="prdInfo--price__unitPrice">13.490.000<sup>₫</sup></p>
          <p class="prdInfo--price--discountPrice">
            <span class="percent">-50%</span>
            <span class="price">24.990.000</span>
          </p>
        </div>
      </div>
    </div>
-->
  </div>
</section>