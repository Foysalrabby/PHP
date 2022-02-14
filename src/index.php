<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/scss/style1.css">
    <link rel="shortcut icon" href="scss/img/mlogo.png" type="image/x-icon">
    <title>Mizuxe</title>

</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">
        <div class="container">

            <a href="#showcase" class="navbar-brand">

                <img src="scss/img/mlogo.png" class="img-fluid rounded" width="70px" height="60px">
                <h3 class=" d-inline align-middle">
                    <strong> Mizuxe</strong> </h3>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbarnav" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbarnav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="#showcase" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#author" class="nav-link "> Meet the author</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link ">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!--showcase-->
    <section id="showcase" class="py-5 text-center">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-6 col-md-12">
                        <h1 class="display-1 pt-5 mt-5">DO you want what is that...</h1>
                        <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eveniet natus voluptate necessitatibus</p>
                        <a href="" class="btn btn-outline-light btn-lg"> <i class="fa fa-arrow-right"></i>Read more

                        </a>
                    </div>
                    <div class=" col-lg-6 col-md-12">

                        <img src="scss/img/elena-ktenopoulou-GjpjuMjuQ6w-unsplash.jpg" class="img-fluid mt-5 pt-5 d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe-->
    <section id="subcribe" class="bg-dark py-5 text-center">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 ">
                    <div class="form-group mb-0 ">
                        <input type="text" name="name" placeholder="Name" class=" form-control form-control-lg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="form-group mb-0 my-2 my-lg-0">
                        <input type="email" name="email" placeholder="email" class=" form-control form-control-lg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">

                    <button class="btn-lg btn btn-primary btn-block">
                       <i class="fa fa-envelope-open-o"></i>
                      Suscribe
                        </button>

                </div>
            </div>
        </div>

    </section>
    <!--Boxes-->
    <section id="boxes" class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h3 class="text-primary">Be Batter</h3>
                            <p class="lead ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi praesentium quae alias adipisci voluptatum. Ipsam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-primary bg-primary">
                        <div class="card-body">
                            <h3 class="text-light">Be Faster</h3>
                            <p class="lead text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi praesentium quae alias adipisci voluptatum. Ipsam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h3 class="text-primary">Be Samrter</h3>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi praesentium quae alias adipisci voluptatum. Ipsam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-primary bg-primary">
                        <div class="card-body">
                            <h3 class="text-light">Be Stronger</h3>
                            <p class="lead text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi praesentium quae alias adipisci voluptatum. Ipsam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--about star-->
    <section id="about" class="text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-header">

                        <h2 class="display-4 text-primary">Why this need book??</h2>
                        <p class="lead mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero fugit quo molestiae placeat!

                        </p>
                    </div>
                    <!--ACCORDDIN-->
                    <div id="accordion" role="tablist" class="pt-5">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <div data-toggle="collapse" href="#collapse1">
                                        <i class="fa fa-arrow-circle-down"></i>Get Inspired
                                    </div>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse show">
                                <div class="card-body">
                                    <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus laboriosam, illum labore incidunt ea adipisci repudiandae eum eveniet omnis aut! Pariatur, ea accusantium?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">

                                <h5 class="mb-0">

                                    <div data-toggle="collapse" href="#collapse2">
                                        <i class="fa fa-arrow-circle-down"></i> Gain Knownladge
                                    </div>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2">
                                <div class="card-body">
                                    <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, fugiat sint accusantium, rem doloremque corporis reprehenderit laborum numquam nihil voluptatibus, ea expedita temporibus distinctio quos ipsam ipsa labore!</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">

                                <h5 class="mb-0">

                                    <div data-toggle="collapse" href="#collapse3">
                                        <i class="fa fa-arrow-circle-down"></i>Open your mind
                                    </div>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse3">
                                <div class="card-body">
                                    <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, fugiat sint accusantium, rem doloremque corporis reprehenderit laborum numquam nihil voluptatibus, ea expedita temporibus distinctio quos ipsam ipsa labore!</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--Authors-->
    <section id="author" class=" text-center py-5  ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class=" display-4 text-primary ">Meet the Authors</h1>
                    <p class="lead mb-5 pb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit porro et nemo dicta velit aliquam aut doloremque asperiores expedita repellendus?</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border-primary ">
                        <div class="card-body ">
                            <img src="scss/img/elena-ktenopoulou-GjpjuMjuQ6w-unsplash.jpg " class="img-fluid w-50 rounded-circle " alt="mm ">
                            <h2>mirzaa ariki</h2>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus autem excepturi consequuntur quaerat ipsam nisi. Natus quibusdam minima molestiae dolorum veritatis, eaque placeat illum magni?</p>
                            <div class="d-flex flex-row justify-content-center">

                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="card border-primary ">
                        <div class="card-body ">
                            <img src="scss/img/karsten-winegeart-VeMo9ePq4KM-unsplash.jpg " class="img-fluid w-50 rounded-circle " alt="mm ">
                            <h2>ria ariki</h2>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus autem excepturi consequuntur quaerat ipsam nisi. Natus quibusdam minima </p>
                            <div class="d-flex flex-row justify-content-center">

                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="card border-primary ">
                        <div class="card-body ">
                            <img src="scss/img/elena-ktenopoulou-GjpjuMjuQ6w-unsplash.jpg " class="img-fluid w-50 rounded-circle " alt="mm ">
                            <h2>liza ariki</h2>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus autem excepturi consequuntur quaerat ipsam nisi. Natus quibusdam minima molestiae dolorum veritatis, eaque placeat illum magni?</p>
                            <div class="d-flex flex-row justify-content-center">

                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6">
                    <div class="card border-primary ">
                        <div class="card-body ">
                            <img src="scss/img/duman-photography-GvvtE31b0JI-unsplash.jpg " class="img-fluid w-50 rounded-circle " alt="mm ">
                            <h2>Rabbi ariki</h2>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus autem Natus quibusdam minima molestiae dolorum veritatis, eaque placeat illum magni?</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="">
                                        <i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Contact -->
    <section id="contact" class="py-5 bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-head">
                        <h1 class="display-4 text-dark">Get in touch</h1>
                        <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, rem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 ">
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-lg">

                                <div class="input-group-prepend ">
                                    <span class="input-group-text">
                                            <i class="fa fa-user">
                                              </i>
                                    </span>
                                </div>

                                <input type="text" placeholder="name" class="form-control  form-control-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" placeholder="email" class="form-control  form-control-lg">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                                </div>
                                <textarea name="message" id="" rows="5" class="form-control  form-control-lg"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block "> 
                                 sunmit
                            </button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <img src="scss/img/laura-chouette-Shx5k3M7-uU-unsplash.jpg" class="img-fluid" alt="m">
                </div>


            </div>
        </div>
        </div>
        </div>
        </div>

    </section>
    <!--footer-->
    <footer class="text-center bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-light">Designed by:
                        <a href="">Rabbi</a>
                    </p>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>



</body>

</html>

</html>