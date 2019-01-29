<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/assets/images/user.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Igor Santos</div>
                <div class="email">igor@navalha.digital</div>
            </div>
        </div>
        <!-- #User Info -->

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menu</li>
                <!-- Dashboard -->
                <li class="@if(Route::is('dashboard')) active @endif">
                    <a href="{{route('dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <!-- Profissionais -->
                <li class="@if(Request::is('/contatos/*')) active @endif">
                    <a href="{{route('contatos.index')}}">
                        <i class="material-icons">people</i>
                        <span>Contatos</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->

        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                Desenvolvido por Navalha Digital.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>