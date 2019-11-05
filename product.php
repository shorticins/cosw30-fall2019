<?php include 'includes/header.php'; ?>


<main class="container">
<!--Internal Product Navigation Links-->
<div class="ten columns offset-by-one">
    <div class="row">
        <div class="twelve columns">
            <nav>
                <ul>
                    <li class="breadcrumbs"><a href="">Home</a></li>
                    <li class="breadcrumbs"><a href="">Dogs</a></li>
                    <li class="breadcrumbs"><a href="">Food</a></li>
                    <li><a href="">Desserts</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!--Product Name-->
    <div class="row">
        <div class="twelve columns">
            <h2>Product Name</h2>
        </div>
    </div>

    <!--Product Image and purchasing information-->
    <div class="row">
        <div class="seven columns">
            <figure class="img--centered">
                <img class="img__main" src="https://images.pexels.com/photos/913136/pexels-photo-913136.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" title="Main Image" alt="Sweet-tart cupcake">
            </figure>
            <!--Thumbnail Images-->
            <div class="img__small img--centered">
                <a href=""><i class="fas fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
            </div>
        </div>

        <div class="five columns div__main">
            <p>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star" title="Ratings"></i>
                <a href="#reviews">Reviews</a>
            </p>

            <p>Price: $ price variable</p>

            <form action="" method="POST">
                <label for="quantity">Quantity:

                    <select id="quantity" name="quantity" size="1" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </label>
                <a class="btn btn--green"><i class="fas fa-shopping-cart u-color--white icon__social"></i>Add to Cart</a>
            </form>

            <!--social media links-->
                <i class="fas fa-share-alt fa-lg u-color--green icon__social" title="Share"></i>
                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter fa-lg u-color--green icon__social" title="Twitter"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-lg u-color--green icon__social" title="Facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-lg u-color--green icon__social" title="Instagram"></i></a>
       </div>
    </div>



    <!--Product Description-->
    <div class="row">
        <div class="twelve columns">
            <h4>Product Description</h4>
            <p>Bacon ipsum dolor amet pancetta doner filet mignon picanha salami cow.
            Rump shankle jerky tongue pancetta, flank venison spare ribs hamburger meatball pork chuck.
            Sirloin meatloaf pig, capicola biltong boudin drumstick jerky shoulder picanha pancetta
            ribeye beef ball tip. Shank beef ribs ham hock short loin spare ribs drumstick andouille
            shoulder prosciutto strip steak brisket leberkas. Tail bacon cow flank.</p>
        </div>
    </div>

    <!--Product Ingredients-->
    <div class="row">
        <div class="twelve columns">
            <h4>Ingredients</h4>
            <p>Bacon ipsum dolor amet pancetta doner filet mignon picanha salami cow.
            Rump shankle jerky tongue pancetta, flank venison spare ribs hamburger meatball pork chuck.
            Sirloin meatloaf pig, capicola biltong boudin drumstick jerky shoulder picanha pancetta
            ribeye beef ball tip. Shank beef ribs ham hock short loin spare ribs drumstick andouille
            shoulder prosciutto strip steak brisket leberkas. Tail bacon cow flank.</p>
        </div>
    </div>

    <!--Customer Reviews-->
    <div class="row" id="reviews">
        <div class="twelve columns">
            <h4>Customer Reviews</h4>
            <p>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star" title="Ratings"></i>
            </p>
            <p>Bacon ipsum dolor amet pancetta doner filet mignon picanha salami cow.
            Rump shankle jerky tongue pancetta, flank venison spare ribs hamburger meatball pork chuck.
            Sirloin meatloaf pig, capicola biltong boudin drumstick jerky shoulder picanha pancetta
            ribeye beef ball tip. Shank beef ribs ham hock short loin spare ribs drumstick andouille
            shoulder prosciutto strip steak brisket leberkas. Tail bacon cow flank.</p>
        </div>
    </div>

    <!--Product Recommendation title-->
    <div class="row">
        <div class="twelve columns">
            <h4>More Treats on this Street</h4>
        </div>
    </div>

    <!--Product Recommendation images and links-->
    <div class="row">
        <div class="four columns">
            <figure class="img--centered">
                <a href="">
                    <img src="https://images.pexels.com/photos/913134/pexels-photo-913134.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Pupcorn Cake" alt="Pupcorn Cake"/>
                </a>
                <figcaption>Pupcorn Cake</figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="">
                    <img src="https://images.pexels.com/photos/2957897/pexels-photo-2957897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Choco-buns" alt="Choco-buns"/>
                </a>
                <figcaption>Choco-buns</figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="">
                    <img src="https://images.pexels.com/photos/2525682/pexels-photo-2525682.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Berry Tart Cake" alt="Berry Tart Cake"/>
                </a>
                <figcaption>Berry Tart Cake</figcaption>
            </figure>
        </div>

    </div>
</div>
</main>

<?php include 'includes/footer.php'; ?>