@extends('navbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuseMe</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
/* 
        .sidebar {
            width: 250px;
            position: fixed;
            height: 100%;
            background: #bebebe;
            padding:25px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        } */

        .logo {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 80px;
            height: 80px;
            border-radius: 100px;
            background-image: url(./images/logo.png);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            margin-right: 10px;
        }

        .logo h3 {
            color: #030303;
            font-size: 24px;
            font-weight: 500;
            line-height: 31px;
            margin: 0;
        }
        .user {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .user img{
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            width: 55px;
            height: 55px;
            border-radius: 100px;
            background-image: url(./images/8249743.jpg);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            margin-right: 10px;
        }
        .username {
          color: #030303;
          font-size: 22px;
          font-weight: 500;
          line-height: 23px;
          text-align: right;
        }

        .nav {
            list-style-type: none;
            padding:0;
        }

        .nav-item {
            padding: 15px 30px;
            text-decoration: none;
            color: #223D44;
            display: flex;
            align-items: center;
            font-size: 16px;
            font-weight: 500;
            line-height: 19px;
        }

        .nav-item:hover, .nav-item.active {
            background-color: #e7e7e7;
        }

        .icon img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .content {
            margin-left: 30px;
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 20px;
            position: relative;
        }

        .search-input {
            width: calc(100% - 30px);
            padding: 10px 30px 10px 40px;
            box-sizing: border-box;
            border: 1px solid #bebebe;
            border-radius: 100px;
            font-size: 16px;
            background-color: #d7d7d7;
        }

        .search-icon {
            position: absolute;
            top: 56%;
            transform: translateY(-50%);
            left: 10px;
        }

        .search-icon img {
            width: 20px;
            height: 20px;
        }
        
        .card, .card-foryou {
            background-size: cover;
            background-position: center;
            border-radius: 15px;
        }

        .card {
            top: 164px;
            left: 245px;
            width: 274px;
            height: 152px;
            background-image: url('./images/card.jpg');
            opacity: 0.9;
        }

        .card-foryou {
            top: 408px;
            left: 245px;
            width: 371px;
            height: 160px;
            background-image: url('./images/relax.jpg');
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0.8;
        }

        .text {
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            line-height: 32px;
            text-align: center;
        }

        .text-songname {
            color: #030303;
            font-size: 16px;
            font-weight: 600;
            line-height: 22px;
        }

        .text-art {
            color: #030303;
            font-size: 14px;
            line-height: 18px;
        }

        .icon-play {
            color: #030303;
            fill: #030303;
            font-size: 16px;
            margin-left:auto;
            width: 20px;
            height: 20px;
        }

        .song-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.song-container img {
    border-radius: 8px;
    margin-right: 10px;
}

.text-song-container {
    display: flex;
    flex-direction: column;
    margin-right: 10px;
}


body {
  display: flex;
  padding: 0 35px;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
.h{
    color:seashell;
}
.wrapper {
  max-width: 1500px;
  width: 100%;
  position: relative;
  margin:30px 0px;
}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.23);
  transform: translateY(-50%);
 background-color:black;
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.85);
}
.wrapper i:first-child{
  left: -22px;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 5) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  align-items:center;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 342px;
  list-style: none;
  background: #fff;
  cursor: pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
}
.carousel .card .img {
  background: black;
  height: 148px;
  width: 148px;
  border-radius: 50%;
}
.card .img img {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #fff;
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 1.56rem;
  margin: 30px 0 5px;
}
.carousel .card span {
  color: #6A6D78;
  font-size: 1.31rem;
}

@media screen and (max-width: 1100px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 3) - 9px);
  }
}
@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
  }
}

@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
  }
}



    </style>
</head>
<body>

   
    <div class="content">
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <img src="/images/search.svg" alt="Search">
            </div>
            <input type="text" class="search-input" placeholder="Search">
        </div>

        <!-- Discover Section -->
        <section class="discover">
            <h2 class="h">Trending</h2>
            <div class="wrapper">
                <ul class="carousel">
                    <li class="card">
                    <div class="img"><img src="images/img-1.jpg" alt="img" draggable="false"></div>
                    <h2>Flowers</h2>
                    <span>Miley Cyrus</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img-2.jpg" alt="img" draggable="false"></div>
                    <h2>Cruel Summer</h2>
                    <span>Taylor Swift</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img-3.jpg" alt="img" draggable="false"></div>
                    <h2>Vampire</h2>
                    <span>Olivia Rodrigo</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img-4.jpg" alt="img" draggable="false"></div>
                    <h2>Nonsense</h2>
                    <span>Sabrina Carpenter</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img-5.jpg" alt="img" draggable="false"></div>
                    <h2>Ceilings</h2>
                    <span>Lizzy McAlpine</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
                    <h2>Eat Your Young</h2>
                    <span>Hozier</span>
                    </li>
                </ul>
                </div>
        </section>

        <!-- For You Section -->
        <section class="for-you">
            <h2 class="h">Recently Played</h2>
            <div class="wrapper">
                <ul class="carousel">
                    <li class="card">
                    <div class="img"><img src="images/img1.jpg" alt="img" draggable="false"></div>
                    <h2>One More Light</h2>
                    <span>Linkin Park</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img2.jpg" alt="img" draggable="false"></div>
                    <h2>Paralyzed</h2>
                    <span>NF</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img3.jpg" alt="img" draggable="false"></div>
                    <h2>Just Like You</h2>
                    <span>NF</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img4.jpg" alt="img" draggable="false"></div>
                    <h2>Willow</h2>
                    <span>Taylor Swift</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img5.jpg" alt="img" draggable="false"></div>
                    <h2>Graveyard</h2>
                    <span>Halsey</span>
                    </li>
                    <li class="card">
                    <div class="img"><img src="images/img6.jpg" alt="img" draggable="false"></div>
                    <h2>Seven</h2>
                    <span>Taylor Swift</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>
<script>
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
</script>
</html>

@stop