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
                                <a class="nav-link" aria-current="page" href="?page=places">Places to visit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?page=food">National food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?page=stories">Stories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="my-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Stories</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <h2>Stories added by our users</h2>
                <div class="card">
                    <div class="card-body">
                        <?php foreach($stories as $story): ?>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item list-group-item-action  d-flex align-items-center">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2016%2F08%2F08%2F09%2F17%2Favatar-1577909_1280.png&f=1&nofb=1&ipt=5287a6e690fc0fc0cc62e5a3d2dcedef5963f80e8246388f97eac8c22cf41366&ipo=images" width="36" height="36" class="img-fluid rounded-circle flex-shrink-0" alt="Avatar 1">
                                <div class="me-auto mx-3">
                                    <div class="text-body-secondary">By <?=htmlspecialchars($story->author)?></div>
                                    <div class="text-body-secondary"><?=htmlspecialchars($story->created_at)?></div>
                                    <div><?=htmlspecialchars($story->message)?></div>
                                </div>
                                <div class="likes-count">
                                    <div class="likes-count-text d-inline align-middle">0</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill="#bb2558" fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer">
                        Total stories added: <?=sizeof($stories)?>
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