{{-- Header --}}  

<div>
    <div class="container-fluid bg-primary">
        <div class="d-flex row-reverse justify-content-end align-items-center">
            <a href="" class="text-white text-uppercase text-decoration-none pe-3">dc power &#8482; visa &#174; </a>
            {{-- Dropdown Button --}}
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
                        additional dc site
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Comics</a></li>
                    <li><a class="dropdown-item" href="#">DC Community</a></li>
                    <li><a class="dropdown-item" href="#">DC on HBOMax</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign in</a></li>
                    </ul>
                </div>
    </div>     
</div>
    <nav class="nav p-3 bg-light align-items-center justify-content-center">
        <img src="{{ asset('/images/dc-logo.png') }}" alt="dc logo" width="70" height="70" class="me-5">
        <a class="nav-link text-dark text-uppercase" href="#">characters</a>
        <a class="nav-link text-dark text-uppercase" href="#">comics</a>
        <a class="nav-link text-dark text-uppercase" href="#">movies</a>
        <a class="nav-link text-dark text-uppercase" href="#">tv</a>
        <a class="nav-link text-dark text-uppercase" href="#">games</a>
        <a class="nav-link text-dark text-uppercase" href="#">collectibles</a>
        <a class="nav-link text-dark text-uppercase" href="#">videos</a>
        <a class="nav-link text-dark text-uppercase" href="#">fans</a>
        <a class="nav-link text-dark text-uppercase" href="#">news</a>
        <div class="btn-group">
            {{-- Dropdown Button --}}
            <button type="button" class="btn btn-light dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
                shop
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Comics</a></li>
                <li><a class="dropdown-item" href="#">Gadgets</a></li>
                <li><a class="dropdown-item" href="#">Collectibles</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign in</a></li>
                </ul>

                <div class="d-flex align-items-center justify-content-center pt-3 ps-3">
                    <div class="input-group input-group-sm mb-3 border-bottom border-primary">
                        <input type="text" class="form-control border-0" placeholder="Search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                       <a href="#"><img src="{{asset('/images/icons8-ricerca-24.png')}}" alt="logo search"></a> 
                    </div>
                </div>
        </div>
        
    </nav>
    
</div>