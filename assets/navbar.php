<style>
    .fixed_navbar {
        box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 0.25rem 0px;

    }

    .fixed_navbar .container,
    .fixed_navbar .navbar {

        padding: 0;
    }

    .nav-item>.nav-link {
        font-size: 17px;
        font-weight: 500;
    }

    .navbar .nav-link {
        color: #000;
    }

    .navbar .dropdown-menu {
        border: 0;
        box-shadow: 0 1px 4px #00000029;
        margin-top: 0;
        width: 200px;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: rgba(0, 128, 0, 0.099);

    }

    .fixed_navbar .nav-item:hover {
        background-color: rgba(0, 128, 0, 0.17);
        border-radius: 5px;
    }

    .fixed_navbar .nav-item {
        padding: 0 5px;
    }

    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1240px;
            width: 100%;
        }
    }

    /* Custom CSS for dropdown hover effect */
    .navbar-nav .nav-item:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
        /* Remove default margin */
    }

    .navbar-toggle {

        border: 1px solid #000 !important;

    }

    .nav_call {
        display: flex;
        align-items: center;
        margin-left: 1.6rem;
    }

    @media only screen and (max-width: 500px) {
        .fixed_navbar .nav-item:hover {
            background-color: #fff;
        }

        .navbar .dropdown-menu {
            width: 100%;
        }

        .nav_call {
            margin-left: 0;
            margin-top: 10px;
            margin-bottom: 1rem !important;
        }
    }
</style>
<section class="fixed_navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="        z-index: 1000;">
            <a class="navbar-brand" href="index">
                <img src="images/logo.webp" alt="" style="height: 5.3rem; width: 100%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Plot Locations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="construction-company-in-delhi-ncr">Delhi/NCR</a>
                            <a class="dropdown-item" href="construction-company-in-gujarat">Gujarat </a>
                            <a class="dropdown-item" href="construction-company-in-chennai">Chennai </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Projects
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="residential-construction-company">Residential Projects</a>
                            <a class="dropdown-item" href="commercial-construction-company">Commercial Projects</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact us</a>
                    </li>
                    <li class="nav-item nav_call">
                        <a href="tel:+91 9717483516" style="color: rgb(0, 0, 0); text-decoration: none;">
                            <img src="images/indiaflag.webp" alt=""><span style="margin-left: 5px; font-weight: 500;">+91 9717-483-516</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>