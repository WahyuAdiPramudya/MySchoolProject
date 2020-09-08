
 <nav style="height:200px; padding-top:70px; background-color: #04b3fc;">
    <div class="nav-wrapper"  >
      <div class="brand-logo right">
        <a class='dropdown-trigger btn' style="border-radius: 20px; background-color: white; color:black;" href='#' data-target='dropdown1'>Profile</a>
        <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/orangtua/murid"><i class="material-icons">assignment_ind</i>Siswa</a></li>
        <li><a href="/logout"><i class="material-icons">logout</i>Keluar</a></li>
      </ul>
      </div>
    <!-- Dropdown Structure -->
      
 
      <div class="">
        <div class="row">
          <div class="col s5">
             <img src="{{asset('assets/frontend/image/jesisca.jpg')}}" style="border-radius: 50%;" class="responsive-img gambar" >
              <label class="username">{{Auth::user()->nama_lengkap}}</label>
              <span class="helper-text" data-error="wrong" data-success="right"> VII 1</span>
          </div>
        </div>
      </div>
      </div>
    </nav>