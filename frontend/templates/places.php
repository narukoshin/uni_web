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
                                <a class="nav-link" href="?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?page=places">Places to visit</a>
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
                        <li class="breadcrumb-item" aria-current="page">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Places</li>
                    </ol>
                </nav>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action d-flex align-items-center active" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                    <div class="mx-1">Tokyo</div>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" id="list-billing-list" data-bs-toggle="list" href="#list-billing" role="tab" aria-controls="list-billing">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                    <div class="mx-1">Osaka</div>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                    <div class="mx-1">Nagoya</div>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" id="list-stats-list" data-bs-toggle="list" href="#list-stats" role="tab" aria-controls="list-stats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                    <div class="mx-1">Fukuoka</div>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" id="list-premium-list" data-bs-toggle="list" href="#list-premium" role="tab" aria-controls="list-premium">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                    <div class="mx-1">Chibi</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="tab-content" id="nav-tab-content">
                                <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <div class="d-flex flex-row gap-3 flex-wrap">
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.touristinjapan.com%2Fwp-content%2Fuploads%2F2018%2F06%2F39574872171_e8020cece7_k.jpg&f=1&nofb=1&ipt=2e1b1e24ca12e442035bdb9a11f43b748469cbb8eb4b290e8804650692322b8f&ipo=images" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Senso-ji Temple</h5>
                                                    <p class="card-text">
                                                        Tokyo's oldest temple in Asakusa. Experience rich history, shop along Nakamise-dori, and participate in traditional rituals.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#tokyo-senso-ji">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.cntraveler.com%2Fphotos%2F598202951209f576909acb19%2Fmaster%2Fw_1200%2Cc_limit%2FShibuya-Crossing-GettyImages-533959897.jpg&f=1&nofb=1&ipt=f52ac03f0cde89dfa3a45961f3a8defcc1625c73350e029341fe77030c35677d&ipo=images" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Shibuya Crossing</h5>
                                                    <p class="card-text">
                                                        Iconic bustling pedestrian crossing outside Shibuya Station. Watch the organized chaos of thousands crossing at once, and explore the trendy Shibuya district.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#tokyo-shibuya-crossing">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic01.nyt.com%2Fimages%2F2015%2F11%2F15%2Ftravel%2F15TOKYO1%2F15TOKYO1-videoSixteenByNine3000.jpg%3Fyear%3D2015%26h%3D1688%26w%3D3000%26sig%3D0xd9109bf46e82419e4ce580e9b8069a67%26tw%3D1&f=1&nofb=1&ipt=3c6f240f002c67fbdbb727e45e79640931e7d1630231e40e759acbe011722b6b&ipo=images" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Tsukiji Fish Market</h5>
                                                    <p class="card-text">
                                                        Outer market still bustling with activity. Sample fresh seafood, explore shops, and experience traditional Japanese market culture.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#tokyo-tsukijifishmarket">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F3.bp.blogspot.com%2F-3tYZIAMZk10%2FWg5OQaVAy2I%2FAAAAAAAAUu0%2FlY027kTqL5U0CRcsNwroA_AQhVYfRPaTwCEwYBhgL%2Fs1600%2FIMG_9031.jpg&f=1&nofb=1&ipt=5366311149aa709053fc6174459bb129bc986c495e610eb1a0c8d26387092a07&ipo=images" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Meiji Shrine and Yoyogi Park</h5>
                                                    <p class="card-text">
                                                        Serene Shinto shrine surrounded by lush forest in the heart of Tokyo. Relax in Yoyogi Park, one of Tokyo's largest parks, for leisurely strolls and picnics.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#tokyo-yoyogipark">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list-billing" role="tabpanel" aria-labelledby="list-billing-list">
                                    <div class="d-flex flex-row gap-3 flex-wrap">
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://wallpaperaccess.com/full/193952.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Osaka Castle</h5>
                                                    <p class="card-text">
                                                        Iconic symbol of Osaka's history. Explore the castle grounds, learn about its rich heritage, and enjoy panoramic views from the top.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#osaka-casle">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://journeycompass.b-cdn.net/wp-content/uploads/2020/12/dotonbori-osaka-guide.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Dotonbori</h5>
                                                    <p class="card-text">
                                                        Vibrant entertainment district famous for its neon lights and street food. Experience the lively atmosphere, dine on local delicacies, and snap photos with iconic landmarks like the Glico Running Man sign.
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#osaka-dotonbori">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-inline-block">
                                            <div class="card shadow-lg p-3 mb-5 rounded">
                                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/c3/76/e8/shinsekai.jpg?w=1200&h=-1&s=1" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Shinsekai</h5>
                                                    <p class="card-text">
                                                        Retro district known for its nostalgic charm and unique atmosphere. Wander through narrow streets, visit Tsutenkaku Tower for panoramic views, and try local specialties like kushikatsu (deep-fried skewers). 
                                                    </p>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-primary col-7 mx-auto" data-bs-toggle="modal" data-bs-target="#osaka-shinsekai">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                                                            </svg>
                                                            <div class="mx-1 d-inline">Where is it?</div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><h1>coming soon...</h1></div>
                                <div class="tab-pane fade" id="list-stats" role="tabpanel" aria-labelledby="list-stats-list"><h1>coming soon...</h1></div>
                                <div class="tab-pane fade" id="list-premium" role="tabpanel" aria-labelledby="list-premium-list"><h1>coming soon...</h1></div>
                            </div>
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
<!-- Modal of the places -->
<div class="modal fade" id="tokyo-senso-ji" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Senso-ji Temple</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1285.5828147450761!2d139.79583838731273!3d35.71476152833238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ec1a4463df1%3A0x6c0d289a8292810d!2zU2Vuc8WNLWpp!5e0!3m2!1sen!2slv!4v1709914648784!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tokyo-shibuya-crossing" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Shibuya Crossing</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.711202706027!2d139.6979793127767!3d35.6594863310515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bcaeb0cd12b%3A0x20e563a2e0aec969!2sShibuya%20Scramble%20Crossing!5e0!3m2!1sen!2slv!4v1709914877969!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tokyo-tsukijifishmarket" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Tsukiji Fish Market</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.4904924950306!2d139.76763921277663!3d35.66492283075285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b21cd0b675b%3A0xa26e24a1bf97025c!2sTsukiji%20Outer%20Market!5e0!3m2!1sen!2slv!4v1709914966642!5m2!1sen!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tokyo-yoyogipark" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Meiji Shrine and Yoyogi Park</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2815328264232!2d139.6923906772076!3d35.67006923058463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb479620a33%3A0x34bcc78ce7f8bf3e!2sYoyogi%20Park!5e0!3m2!1sen!2slv!4v1709915123781!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="osaka-casle" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Osaka castle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.7102566183357!2d135.52327967718668!3d34.68726148393127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0cd5c283afd%3A0xf01d07d5ca11e41!2sOsaka%20Castle!5e0!3m2!1sen!2slv!4v1709915270448!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="osaka-dotonbori" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Dotonbori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6562.903909780529!2d135.49894225005417!3d34.668541165740066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e71526dc6083%3A0xe43d6b861e80b709!2sDotonbori%2C%20Chuo%20Ward%2C%20Osaka%2C%20542-0071%2C%20Japan!5e0!3m2!1sen!2slv!4v1709915946677!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="osaka-shinsekai" tabindex="-1" aria-labelledby="modal-title-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title-1">Shinsekai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.0413007096327!2d135.50303017718616!3d34.653659885733255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7608e08abc7%3A0x2d0ad0d2195ec6e8!2sShinsekai%20Market!5e0!3m2!1sen!2slv!4v1709915994943!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>