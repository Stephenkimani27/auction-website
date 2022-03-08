<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Product Cards | With Quick Popup View</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="container">
    <div class="product">
        <div class="product-card">
            <h2 class="name">minimalist art</h2>
            <span class="price">$120.00</span>
            <a class="popup-btn">Quick View</a>
            <img src="static/images/pine.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
            <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                    <img src="static/images/pine.jpg" alt="">
                </div>
                <div class="info">
                    <h2>minimalist art<br><span>contemporary modern art</span></h2>
                    <p>Minimalism  art  design describes movements in various forms of art and design, especially
                        visual art and music, where the work is set out to expose the essence, essentials or
                        identity of a subject through eliminating all non-essential forms, features or concepts.</p>
                    <span class="price">$120.00</span>
                    <a href="bid/index.php" class="add-cart-btn">live auction</a>

                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="product-card">
            <h2 class="name">pop art</h2>
            <span class="price">$100.00</span>
            <a class="popup-btn">Quick View</a>
            <img src="static/images/val.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
            <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                    <img src="static/images/val.jpg" alt="">
                </div>
                <div class="info">
                    <h2>pop art<br><br><span>contemporary art</span></h2>
                    <p>pop art design, sometimes written as figurativism,
                        describes artwork that is clearly derived from real object sources and so is, by definition,
                        representationa</p>
                    <span class="price">$100.00</span>
                    <a href="bid/index.php" class="add-cart-btn">live auction</a>

                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="product-card">
            <h2 class="name">painting</h2>
            <span class="price">$250.00</span>
            <a class="popup-btn">Quick View</a>
            <img src="static/images/new.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
            <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                    <img src="static/images/new.jpg" alt="">
                </div>
                <div class="info">
                    <h2>painting<br><br><span>contemporary art</span></h2>
                    <p>Painting is the practice of applying paint, pigment,
                        color or other medium to a solid surface called the "matrix" or "support".[1] The medium
                        is commonly applied to the base with a brush, but other implements, such as knives, sponges,
                        and airbrushes, can be used.</p>
                    <span class="price">$250.00</span>
                    <a href="bid/index.php" class="add-cart-btn">live auction</a>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick){
        popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
        popupBtn.addEventListener("click", () => {
            popup(i);
        });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
        closeBtn.addEventListener("click", () => {
            popupViews.forEach((popupView) => {
                popupView.classList.remove('active');
            });
        });
    });
</script>

</body>
</html>
</body>
</html>