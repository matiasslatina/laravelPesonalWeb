<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <span class="d-block d-lg-none">{{ config('app.name') }}</span>
        <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-bottom rounded-top mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">
                @lang('about.about')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">
                @lang('experience.experience')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">
                @lang('education.education')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">
                @lang('skills.skills')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">
                @lang('interests.interests')
            </a>
        </li>
        </ul>
    </div>
</nav>

