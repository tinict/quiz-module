<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="h-25 w-25" src="{{ asset('assets/media/images/logo-quiz.png') }}" alt="logo quiz">
        Zeal Quiz
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Ecosystem</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Tools</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Docs</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
    </div>

    <!-- Modal -->
    <x-modals.tongle-modal />
</header>
