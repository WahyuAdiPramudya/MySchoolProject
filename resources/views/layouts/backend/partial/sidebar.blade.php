
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        @if(Request::is('SuperAdmin*'))
        <ul class="navigation-left">
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('SuperAdmin.dashboard') }}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item ">
                <a class="nav-item-hold" href="{{ route('SuperAdmin.Sekolah.index') }}">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Mitra Myschool</span>
                </a>
                <div class="triangle"></div>
            </li>
                <li class="nav-item">
            <a class="nav-item-hold" href="{{ route('SuperAdmin.staff.index') }}">
                <i class="nav-icon i-Computer-Secure"></i>
                <span class="nav-text">Daftar Staff</span>
            </a>
            <div class="triangle"></div>
        </li>
        <li class="nav-item" data-item="kelola_akun">
            <a class="nav-item-hold" href="#" >
                <i class="nav-icon i-Administrator"></i>
                <span class="nav-text">Kelola Akun</span>
            </a>
            <div class="triangle"></div>
        </li>
        <li class="nav-item" data-item="">
            <a class="nav-item-hold" href="{{route('SuperAdmin.Update.index')}}" >
                <i class="nav-icon i-Book"></i>
                <span class="nav-text">Update Informasi</span>
            </a>
            <div class="triangle"></div>
        </li>
              <li class="nav-item " >
            <a class="nav-item-hold" href="/logout">
                <i class="nav-icon i-Double-Tap"></i>
                <span class="nav-text">Logout</span>
            </a>
            <div class="triangle"></div>
        </li>  
        </ul>
       </div>
       <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
    <!-- Submenu Dashboards -->
    <ul class="childNav" data-parent="dashboard">
    </ul>
    <ul class="childNav" data-parent="kelola_akun">
        <li class="nav-item">
            <a href="{{ route('SuperAdmin.Guru.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Data Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('SuperAdmin.Orangtua.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Data Orang tua</span>
            </a>
        </li>

    </ul>
    @endif
    @if(Request::is('staff*'))
    <ul class="navigation-left">
        <li class="nav-item">
            <a class="nav-item-hold" href="{{route('staff.dashboard') }}">
                <i class="nav-icon i-Bar-Chart"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            <div class="triangle"></div>
        </li>
        <li class="nav-item " data-item="data-master">
            <a class="nav-item-hold" href="#">
                <i class="nav-icon i-File-Clipboard-File--Text"></i>
                <span class="nav-text">Data Master</span>
            </a>
            <div class="triangle"></div>
        </li>  

        <li class="nav-item" data-item="data-sekolah">
            <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Computer-Secure"></i>
                <span class="nav-text">Data Sekolah</span>
            </a>
            <div class="triangle"></div>
        </li>
        <li class="nav-item">
            <a class="nav-item-hold" href="{{ route('staff.kelola_akun.index') }}">
                <i class="nav-icon i-Administrator"></i>
                <span class="nav-text">Kelola Akun</span>
            </a>
            <div class="triangle"></div>
        </li>
        <li class="nav-item " data-item="widgets">
            <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Windows-2"></i>
                <span class="nav-text">laporan</span>
            </a>
            <div class="triangle"></div>
        </li>

        <li class="nav-item " >
            <a class="nav-item-hold" href="/logout">
                <i class="nav-icon i-Double-Tap"></i>
                <span class="nav-text">Logout</span>
            </a>
            <div class="triangle"></div>
        </li> 
    </ul>
</div>

<div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
    <!-- Submenu Dashboards -->
    <ul class="childNav" data-parent="dashboard">
    </ul>
    <ul class="childNav" data-parent="data-master">
        <li class="nav-item">
            <a href="{{ route('staff.kelas.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Kelas</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('staff.berita.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('staff.mapel.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Mapel</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('staff.jadwal.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">jadwal</span>
            </a>
        </li>

    </ul>
    <ul class="childNav" data-parent="data-sekolah">
        <li class="nav-item">
            <a href="{{ route('staff.siswa.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('staff.guru.index') }}" class="nav-item-hold" >
                <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                <span class="item-name">Guru</span>
            </a>
        </li>

    </ul>
    <ul class="childNav" data-parent="widgets">
        <li class="nav-item">
            <a class="" href="widgets/card.html">
                <i class="nav-icon i-Receipt-4"></i>
                <span class="item-name">Laporan Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class=""
            href="widgets/statistics.html">
            <i class="nav-icon i-Receipt-4"></i>
            <span class="item-name">Laporan Absensi Siswa</span>
        </a>
    </li>
    <li class="nav-item">
        <a class=""
        href="widgets/statistics.html">
        <i class="nav-icon i-Receipt-4"></i>
        <span class="item-name">Laporan Absensi Guru</span>
    </a>
</li>
<li class="nav-item">
    <a class=""
    href="widgets/statistics.html">
    <i class="nav-icon i-Receipt-4"></i>
    <span class="item-name">Laporan Nilai</span>
</a>
@endif
</li>
</ul>
</div>
<div class="sidebar-overlay"></div>
</div>
