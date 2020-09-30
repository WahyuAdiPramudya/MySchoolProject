 @if(Auth::user()->role_id == 3)
<footer class="page-footer nav-bottom hidden" style="position: fixed; bottom:0; width:100%; background-color:white;">
    <div class="row no-mg" style="margin-bottom:0px;  color:#04b3fc;">
      <div class="col s12 no-pd">
        <ul class="tabs tabs-fixed-width transparent green-text tabs-icon" style="padding-left:0px!important;padding-right:0px!important;">
          <li class="tab col s3">
            <a href="/guru" class="">
              <i class="material-icons">home</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Home</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/guru/listberita" class="">
              <i class="material-icons">pie_chart</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Update</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/Acount" class="">
              <i class="material-icons">people</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Bantuan</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/guru/profile" class="">
              <i class="material-icons">account_circle</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Akun</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  @else
  <footer class="page-footer nav-bottom hidden" style="position: fixed; bottom:0; width:100%; background-color:white;">
    <div class="row no-mg" style="margin-bottom:0px;  color:#04b3fc;">
      <div class="col s12 no-pd">
        <ul class="tabs tabs-fixed-width transparent green-text tabs-icon" style="padding-left:0px!important;padding-right:0px!important;">
          <li class="tab col s3">
            <a href="/orangtua" class="">
              <i class="material-icons">home</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Home</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/orangtua/listupdate" class="">
              <i class="material-icons">pie_chart</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Update</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/Acount" class="">
              <i class="material-icons">people</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Bantuan</span>
            </a>
          </li>
          <li class="tab col s3">
            <a href="/orangtua/profileorangtua" class="">
              <i class="material-icons">account_circle</i>
              <span style="font-size: 14px; text-transform: lowercase;
              text-transform: capitalize;">Akun</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  @endif
