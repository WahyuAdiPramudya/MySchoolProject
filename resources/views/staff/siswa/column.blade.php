<center>
<a href="{{ $url_edit }}" class="text-success mr-2">
                                           <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                        </a>
<a href="{{ $url_show }}" class="btn btn-outline-primary btn-rounded btn-sm">View details</a >    
&nbsp;                                    
<a type="button" onclick="deletesiswa({{ $siswa->nisn }})" class="text-danger mr-2">
         <i class="nav-icon i-Close-Window font-weight-bold"></i>
   </a>
</center>
                                        
<form  id="delete-form-{{$siswa->nisn}}" style="display:none;" action="{{ $url_destroy }}"  method="POST">
       {{ @csrf_field() }}
       {{@method_field('DELETE')}}
   </form>

