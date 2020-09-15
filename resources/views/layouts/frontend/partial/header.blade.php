
<nav style="height:200px; padding-top:70px;">
  <div class="nav-wrapper"  >

    @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
    <div class="brand-logo right">
      <a class='dropdown-trigger btn' style="border-radius: 20px; background-color: white; color:black;" href='#' data-target='dropdown1'>Profile</a>
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/logout"><i class="material-icons">logout</i>Keluar</a></li>
      </ul>
    </div>
    @endif
     <div class="brand-logo right">
      <a class='dropdown-trigger btn' style="border-radius: 20px; background-color: white; color:black;" href='#' data-target='dropdown1'>Profile</a>
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!"><i class="material-icons">assignment_ind</i>Siswa</a></li>
        <li><a href="/logout"><i class="material-icons">logout</i>Keluar</a></li>
      </ul>
    </div>
    <!-- Dropdown Structure -->


    <div class="">
      <div class="row">
        <div class="col s9">
        @if(Auth::user()->role_id == 4) 
        <img src="{{asset('assets/frontend/image/siswa.png')}}" style="border-radius: 50%;" class="responsive-img gambar" >
         @else
        <img src="{{asset('assets/frontend/image/Karyawan.jpg')}}" style="border-radius: 50%;" class="responsive-img gambar">
        @endif
         <label class="username">{{auth()->user()->nama_lengkap}}</label>
       </div>
     </div>
   </div>
 </div>
</nav>
