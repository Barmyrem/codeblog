<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art.Photo Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    

</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand">Art.Photo</a>
                <div class="navbar-nav">
                    <ul>
                        <li>
                            <span class="material-icons-outlined"> notifications </span>
                        </li>
                        <li>
                            <span class="material-icons-outlined"> favorite_border </span>
                        </li>
                         <li class="profile" >
                            
                            <span class="material-icons-outlined"> edit </span>
                            
                            <ul>
                                <li class="sub-item">
                                    <span class="material-icons-outlined"> add</span>

                                    <p>Add Posts</p>
                                </li>
                                <li class="sub-item">
                                    <span class="material-icons-outlined"> visibility </span>
                                    <p>View Posts</p>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li>
                            <img src="images/avatar.png" class="profile" />
                            <ul>
                            <li class="sub-item">
                            <a href="login.php">
                       <span  class="material-icons-outlined">login</span>
                      </a>
                          <p>Login</p>
                            
                          </li>

                                <li class="sub-item">
                                <a href="register.php">
                                <span class="material-icons-outlined">app_registration</span>
                                </a>
                                    <p>Register</p>
                                </li>
                                <li class="sub-item">
                                <a href="update_profile.php">
                                    <span class="material-icons-outlined"> manage_accounts </span>
                                    </a>
                                    <p>Update Profile</p>

                                </li>
                                <li class="sub-item">
                                <a href="index.php">
                                    <span class="material-icons-outlined"> logout </span>
                                    </a>
                                    <p>Logout</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <div class="container">
                <h1 class="banner-title">
                    Art & Photography Blog
                </h1>
                <p>everything that you want to know about art & Photography</p>
                <form>
                    <input type="text" class="search-input" placeholder=" ">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- blog -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="title">
                <h2>Latest Blog</h2>
                <p>recent blogs about art & design</p>
            </div>
            <div class="blog-content">

                <!-- item -->
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/blog-p-6.jpg" alt="">
                    
                    </div>
                    <div class="blog-text">
                        <div class="user-info">
                            <img src="images/h2.jpg" alt="">
                            <span> Alex Monrow</span>
                        </div>
                        <span><br>#Photography & Art </br></span>
                        <h2>Explore the World of Books</h2>
                        <p> Books are a gateway to adventure, knowledge, and new experiences. At our bookstore, we
                            believe in the power of books to inspire, entertain, and educate</p>
                        <a href="#">Read More</a>
                    <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span> 254likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
  <h3>Comments</h3>
  <ul>
    <li>
      <div class="user-info">
        <img src="images/avatar.png" alt="">
        <span>John Doe</span>
      </div>
      <div class="comment-text">
        <p>Great article! Thanks for sharing.</p>
      </div>
    </li>
    <li>
      <div class="user-info">
        <img src="images/avatar.png" alt="">
        <span>Jane Smith</span>
      </div>
      <div class="comment-text">
        <p>Love the photos!Can't wait to see more.</p>
      </div>
    </li>
  </ul>
  <form>
    <input type="text" placeholder="Add a comment">
    <button type="submit">Submit</button>
  </form>
</div>

            </div>
        </div>
                <!-- end of item -->
                <!-- item -->
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/blog-p-2.jpg" alt="">
                    </div>
                    <div class="blog-text">
                        <div class="user-info">
                            <img src="images/h4.jpg" alt="">
                            <span>Kevin Justin</span>
                        </div>
                        <span><br>#Photography & Art </br></span>
                        <h2>The Art of Simple Things</h2>
                        <p> The art of photography is not limited to capturing grand landscapes or exotic destinations.
                            In fact, some of the most beautiful and inspiring </p>
                        <a href="#">Read More</a>
                     <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span>40 likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>John Doe</span>
                            </div>
                            <p>Great article! Thanks for sharing.</p>
                        </li>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>Jane Smith</span>
                            </div>
                            <p>Love the photos! Can't wait to see more.</p>
                        </li>
                    </ul>
                    <form>
                        <input type="text" placeholder="Add a comment">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- end of item -->
                <!-- item -->
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/mer.jpg" alt="">
                      
                    </div>
                    <div class="blog-text">
                        <div class="user-info">
                            <img src="images/h6.jpg" alt="">
                            <span>Gabriel Asta</span>
                        </div>
                        <span><br>#Photography & Art </br></span>
                        <h2>The Power of Red: Discover the Mercedes-Benz Red Collection</h2>
                        <p> The Mercedes-Benz Red Collection is a celebration of power, passion, and luxury. Experience
                            the ultimate driving experience with our latest addition to the collection </p>
                        <a href="#">Read More</a>
                     <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span>86 likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>John Doe</span>
                            </div>
                            <p>Great article! Thanks for sharing.</p>
                        </li>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>Jane Smith</span>
                            </div>
                            <p>Love the photos! Can't wait to see more.</p>
                        </li>
                    </ul>
                    <form>
                        <input type="text" placeholder="Add a comment">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- end of item -->
                <!-- item -->
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/blog-p-3.jpg" alt="">
                       
                    </div>
                    <div class="blog-text">
                        <div class="user-info">
                            <img src="images/h8.jpg" alt="">
                            <span>Georgia MS</span>
                        </div>
                        <span><br>#Photography & Art</br></span>
                        <h2>Blossom with Beauty</h2>
                        <p> Flowers are truly remarkable creations of nature. They come in a vast array of shapes, sizes, and colors, each with its own unique beauty. From the delicate petals of a rose </p>
                        <a href="#">Read More</a>
                     <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span>120 likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>John Doe</span>
                            </div>
                            <p>Great article! Thanks for sharing.</p>
                        </li>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>Jane Smith</span>
                            </div>
                            <p>Love the photos! Can't wait to see more.</p>
                        </li>
                    </ul>
                    <form>
                        <input type="text" placeholder="Add a comment">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- end of item -->
                <!-- item -->
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/art-design-1.jpg" alt="">
                     
                    </div>
                    <div class="blog-text">
                        <div class="user-info">
                            <img src="images/h1.jpg" alt="">
                            <span>Daniel hado</span>
                        </div>
                        <span><br>#Photography & Art </br></span>
                        <h2>The power of the natural world</h2>
                        <p>the sparkles on her skin catch the light and twinkle like stars, creating a mesmerizing effect that is both enchanting and captivating. There is a sense of mystery and depth about</p>
                        <a href="#">Read More</a>
                    <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span>20 likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>John Doe</span>
                            </div>
                            <p>Great article! Thanks for sharing.</p>
                        </li>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>Jane Smith</span>
                            </div>
                            <p>Love the photos! Can't wait to see more.</p>
                        </li>
                    </ul>
                    <form>
                        <input type="text" placeholder="Add a comment">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- end of item -->
                <!-- item -->
                <div class="blog-item">
            <div class="blog-img">
                <img src="images/art-design-5.jpg" alt="">
               
            </div>
            <div class="blog-text">
                <div class="user-info">
                    <img src="images/h3.jpg" alt="">
                    <span>Diana Monrwo</span>
                </div>
                <span><br>#Photography & Art </br></span>
                <h2>Exploring the Treasures of the World</h2>
                <p> Experience the vibrant and dynamic world of contemporary art at our modern museum. Immerse
                    yourself in thought-provoking installations </p>
                <a href="#">Read More</a>

                <!-- like button -->
                <div class="like-button">
                    <button><i class="far fa-heart"></i> Like</button>
                    <span>476 likes</span>
                </div>
                 <!-- comment section -->
                 <div class="comment-section">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>John Doe</span>
                            </div>
                            <p>Great article! Thanks for sharing.</p>
                        </li>
                        <li>
                            <div class="user-info">
                                <img src="images/avatar.png" alt="">
                                <span>Jane Smith</span>
                            </div>
                            <p>Love the photos! Can't wait to see more.</p>
                        </li>
                    </ul>
                    <form>
                        <input type="text" placeholder="Add a comment">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- end of item -->
            </div>
        </div>
    </section>
    <!-- end of blog -->

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div>
                    <img src="images/blog-p-1.jpg" alt="">
                </div>
                <div class="about-text">
                    <div class="title">
                        <p> About us</p>
                        <p>Welcome to Art & Photography Blog, a platform for artists, photographers, and art enthusiasts
                            to connect, share their work, and discover new perspectives.</p>
                    </div>
                    <p>Our mission is to inspire creativity and promote artistic expression through our blog, featuring
                        articles on various topics such as art history, photography techniques, and artist interviews.
                    </p>
                    <p>We believe that art and photography have the power to evoke emotions, challenge perspectives, and
                        bring people together. Our team consists of passionate artists and photographers who share this
                        belief and are dedicated to providing a space for the community to thrive.</p>
                    <p>Whether you're a professional artist or photographer, a hobbyist, or simply someone who
                        appreciates the beauty of art, we invite you to join us on this journey. Connect with fellow
                        creatives, share your work, and discover new inspiration on our website.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about -->

    <!-- footer -->
    <footer>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <span>Art.Design Blog Page</span>
    </footer>
    <!-- end of footer -->


</body>

</html>