@include('inc.titles')


<header>
    <nav>
        <div class="main-nav-wrapper">
            @if(Auth::user())
            <ul id="dashboard-panel-link">
                <li>
                    <p><a href="/dashboard"><i class="fa fa-cogs"></i></a> <span id="dashboard-panel-text">{{Auth::user()->name}}</span></p>
                </li>
            </ul>
            @endif
            <ul>
                @foreach(Info::nav_titles() as $nav_title)
                    <li class="main-nav-item">
                        <a style="color: {{ $nav['color'] }}" class="link {{ $nav['class'] }}" href="{{ $nav_title['url'] }}">
                                {{ $nav_title['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            </div>
            </nav>
        <nav id="mobile-navigation-nav" class="mobile-nav">
            <ul>
                @foreach(Info::nav_titles() as $nav_title)
                <li>
                    <a class="mobile-nav-item" href="{{ strtolower($nav_title['url']) }}">{{
                        $nav_title['name'] }}</a>
                </li>
                @endforeach
                @if(Auth::user())
                <li>
                    <a id="mobile-dashboard-item" class="mobile-nav-item" href="{{URL::$url }}dashboard"><i class="fa fa-cogs"></i> {{Auth::user()->name}}</a>
                </li>
                @endif
            </ul>
            <footer class="footer mobile-nav-footer">
                <div>
                    <span class="footer-left">Rompens Gård &copy; 2018</span>
                    <span class="footer-right">Besök oss på
                        <a href="" target="_blank">Facebook</a> och
                        <a href="" target="_blank">Instagram</a>.
                    </span>
            
                </div>
            </footer>
            
        </nav>
    <span id="mobile-navigation-button"><i class="fa fa-bars"></i></span>
     
    </header>