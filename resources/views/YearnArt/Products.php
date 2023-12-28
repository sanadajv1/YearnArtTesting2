<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/products.css">
<link rel="stylesheet" href="assets/css/typing.css">
<link rel="stylesheet" href="assets/css/chatbot.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<title>Yearn Art | Home</title>
<link rel="icon" href="assets/image/Yearn.jpg" type="image/png">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="Yearn.jpg" alt="Logo">
      <a href="/">Yearn Art</a>
    </div>
    <div class="menu">
        <div class="menu-links">
            <a href="Products" class="Products">Products</a>
            <a href="MyOrders" class="Orders">My Orders</a>
            <a href="About" class="About">About Us</a>
            <a href="FAQ" class="FAQ">FAQ</a>
            <a href="login" class="Login">Log in</a>
            <a href="register" class="Signup">Signup</a>
        </div>
    </div>
    <div class="menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
  </nav>

  <div class="container">
    <div class="handmade">
        <h2>Handmade Bags</h2>
        <div class="handmade-products">
            <section class="layout1">
                <div>
                    <img src="/Yearn Art/Image/Elmobag.png" alt="Elmo Bag">
                </div>
                <div>
                    <img src="/Yearn Art/Image/Totebag.png" alt="Tote Bag">
                </div>
                <div>
                    <img src="/Yearn Art/Image/Bag.png" alt="">
                </div>
            </section>
        </div>
    </div>
    
    <div class="babyclothes">
        <h2>Baby Clothing</h2>
        <div class="babyclothing-products">
            <section class="layout1">
                <div>
                    <img src="/Yearn Art/Image/Baby1.png" alt="Elmo Bag">
                </div>
                <div>
                    <img src="/Yearn Art/Image/Baby2.png" alt="Tote Bag">
                </div>
                <div>
                    <img src="/Yearn Art/Image/Baby3.png" alt="">
                </div>
                <div>
                    <img src="/Yearn Art/Image/Baby4.png" alt="">
                </div>
            </section>
        </div>
    </div>

    <div class="beachwear">
        <h2>Beachwear</h2>
        <div class="beachwear-products">
            <section class="layout1">
                <div>
                    <img src="/Yearn Art/Image/bw1.png" alt="Elmo Bag">
                </div>
                <div>
                    <img src="/Yearn Art/Image/bw2.png" alt="Tote Bag">
                </div>
            </section>
        </div>
    </div>
  </div>

<div class="chatbot">
    <div class="chatbox">
        <div class="chatbox__support">
            <div class="chatbox__header">
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header">YearnBot</h4>
                </div>
            </div>
            <div class="chatbox__messages">
                <div>
                    <div class="messages__item messages__item--visitor">
                        Can you let me talk to the support?
                    </div>
                    <div class="messages__item messages__item--operator">
                        Sure!
                    </div>
                    <div class="messages__item messages__item--visitor">
                        Need your help, I need a developer in my site.
                    </div>
                    <div class="messages__item messages__item--operator">
                        Hi... What is it? I'm a front-end developer, yay!
                    </div>
                    <div class="messages__item messages__item--typing">
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                    </div>
                </div>
            </div>
            <div class="chatbox__footer">
                <div class="file">
                    <img src="file.png" alt="file">
                </div>
                <input type="text" placeholder="Write a message...">
                <div class="icon">
                    <img src="./send.png" alt="Send">
                </div>
            </div>
        </div>
        <div class="chatbox__button">
            <button>button</button>
        </div>
    </div>
</div>
<script src="./Chat.js"></script>
<script src="./app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>


  <script>
    const menuLinks = document.querySelectorAll('.menu-link');
    
    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuLinks.forEach(otherLink => otherLink.classList.remove('active-link'));
        link.classList.add('active-link');
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const showMoreButton = document.getElementById("show-more");
    const hiddenContent = document.querySelector(".hidden-content");

    showMoreButton.addEventListener("click", function() {
        if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
            hiddenContent.style.display = "block";
            showMoreButton.textContent = "Less";
        } else {
            hiddenContent.style.display = "none";
            showMoreButton.textContent = "More";
        }
    });
});
  </script>
</body>
</html>