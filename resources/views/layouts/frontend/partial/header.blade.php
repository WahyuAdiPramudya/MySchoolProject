
 <nav style="height: 100px;">
    <div class="container">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
       <!-- Dropdown Trigger -->
       <div class="row">
         <div class="photo" style="border-radius:50%; border-color:white;">
          <img src="{{ asset('cancel.png') }}" class="responsive-img gambar" alt="">
        </div>
          <div class="profile" style="background-color: white; width:100px; height:30px; text-align:center; border-radius:30px;">
            
            <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:black; line-height:30px;">Drop Me</a>
           </div>
              <!-- Dropdown Structure -->
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
              </ul>
       </div>
        <div class="card" style="border-radius:10px;">
          <div class="" >
              <div class="row" style="text-align:center;">
                  <div class="col s4">
                      <small>Nama Sekolah</small>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </nav> 