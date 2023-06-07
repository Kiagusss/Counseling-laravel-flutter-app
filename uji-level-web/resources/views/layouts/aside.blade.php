@if (Auth::check())
    @if (Auth::user()->hasRole('admin'))
     <nav class="side-nav">
        <ul>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Data Dashboard  
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{route('siswa.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Data Siswa</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('guru.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Data Guru BK</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('walas.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Data Walas</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
     </nav>

    @elseif(Auth::user()->hasRoles('wali_kelas'))
     
    <nav class="side-nav">
        <ul>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Data Walas 
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 2 </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    @else

    <nav class="side-nav">
        <ul>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Data guru bk 
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 2 </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    @endif
@endif