
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
                    <li>
                        <a href="{{route('kelas.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Data Kelas</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
     </nav>

    @elseif(Auth::user()->hasRole('wali_kelas'))

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
                            <div class="side-menu__title"> Data Siswa</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('peta-kerawanan.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="side-menu__title">Peta Kerawanan</div>
                </a>
            </li>
        </ul>
    </nav>

    @elseif(Auth::user()->hasRole('guru_bk'))
     
    <nav class="side-nav">
        <ul>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Data Guru BK
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="siswa-bk-{{Auth::user()->id}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Data Siswa</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Layanan
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/layanan-bk-pending-{{Auth::user()->id}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Pending</div>
                        </a>
                    </li>
                    <li>
                        <a href="/layanan-bk-approved-{{Auth::user()->id}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Approved</div>
                        </a>
                    </li>
                    <li>
                        <a href="/layanan-bk-Archive-{{Auth::user()->id}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">Archive</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('peta.peta-kerawanan.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="side-menu__title">Peta Kerawanan</div>
                </a>
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
                        <a href="/siswa-bk-{{Auth::user()->id}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Data Siswa </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    @endif
@endif