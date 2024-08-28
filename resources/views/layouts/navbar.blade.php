<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app_name', 'Form File') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('articles/cetak_pdf') ? 'active' : '' }}" href="{{ url('/articles/cetak_pdf') }}" target="_blank" aria-current="page">Print PDF</a>
          </li> --}}
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle {{ Request::is('article/create' && 'article/edit') ? 'active' : '' }}" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Article
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item {{ Request::is('articles/create') ? 'active' : '' }}" href="{{ url('/articles/create') }}">Create</a></li>
              {{-- <li><a class="dropdown-item {{ ($activeMenu == 'article_edit') ? 'active' : '' }}" href="{{ url('/articles/'. $article->id .'/edit') }}">Update</a></li> --}}
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>