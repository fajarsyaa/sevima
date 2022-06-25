 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="{{ route('dashboard') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-book-fill"></i></i><span>Kelola absesni</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="">
                         <i class="bi bi-circle"></i><span>Absensi Perkelas</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
             <a class="nav-link " href="{{ route('jurusan.index') }}">
                 <i class="bi bi-grid"></i>
                 <span>Jurusan</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <li class="nav-item">
             <a class="nav-link " href="{{ route('kelas.index') }}">
                 <i class="bi bi-grid"></i>
                 <span>Kelas</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <li class="nav-item">
             <a class="nav-link " href="{{ route('scan') }}">
                 <i class="bi bi-grid"></i>
                 <span>SCAN</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-book-fill"></i></i><span>Absen</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('qr.index') }}">
                         <i class="bi bi-circle"></i><span>Absen</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('absen.index') }}">
                         <i class="bi bi-circle"></i><span>izin</span>
                     </a>
                 </li>
             </ul>
         </li>

         @if (Auth::user()->level == 'siswa')
             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                     href="#">
                     <i class="bi bi-book-fill"></i></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('tugas.index') }}">
                             <i class="bi bi-circle"></i><span>Tugas</span>
                         </a>
                     </li>
                     <li>
                         <a href="components-accordion.html">
                             <i class="bi bi-circle"></i><span>Absen</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Components Nav -->
         @endif

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-trophy-fill"></i></i><span>Ranking</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="components-alerts.html">
                         <i class="bi bi-circle"></i><span>kelas 10</span>
                     </a>
                 </li>
                 <li>
                     <a href="components-accordion.html">
                         <i class="bi bi-circle"></i><span>kelas 11</span>
                     </a>
                 </li>
                 <li>
                     <a href="components-accordion.html">
                         <i class="bi bi-circle"></i><span>kelas 12</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->


         <li class="nav-heading">account</li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ route('profile.show', Auth::user()->id) }}">
                 <i class="bi bi-person"></i>
                 <span>Profile</span>
             </a>
         </li><!-- End Profile Page Nav -->


         <li class="nav-item">
             <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 <i class="bi bi-box-arrow-in-left"></i>
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
         </li><!-- End Login Page Nav -->

     </ul>

 </aside><!-- End Sidebar-->
