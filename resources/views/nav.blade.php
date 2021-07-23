<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> 
                {{ config('app.name', 'Navigation Bar Demo') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="#app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                  
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('home') }}">回到登入頁面</a>
                    </li>
                </ul>
                <form class="search" style="display:block">
                    <input class="input_search" type="search" placeholder="Search" aria-label="Search" style="height: 37px;border-radius: 5px">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav> 

            
