<?php
$current = $_SERVER['REQUEST_URI'];

if ($current === '/' || $current === '') {
    $current = '/index.php';
}

function active($path) {
    global $current;
    return strpos($current, $path) !== false ? 'active' : '';
}
?>

<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <img src="../../assets/images/favicon.png" alt="" width="60px">
            <span>
              SPYNetwork
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item <?= active('home.php') ?>">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="https://netfi.spynetwork.io" target="_blank"> NETFI </a>
                </li>
                <li class="nav-item <?= active('roadmap') ?>">
                  <a class="nav-link" href="roadmap">Roadmap</a>
                </li>
                <li class="nav-item <?= active('whitepaper') ?>">
                  <a class="nav-link" href="whitepaper">Whitepaper</a>
                </li>
                <li class="nav-item <?= active('help') ?>">
                  <a class="nav-link" href="help">Help</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://ispyn.vercel.app/" target="_blank">I-Spyn</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <!-- <a href="">
                <img src="../../assets/images/call.png" alt="">
                <span>
                  Call : + 62 1234567890
                </span>
              </a> -->
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
