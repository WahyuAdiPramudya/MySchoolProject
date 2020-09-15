<center>
<a href="{{ $url_edit }}" class="text-success mr-2">
                                           <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                        </a>
<a type="button" onclick="deleteKelas({{ $kelas->id }})" class="text-danger mr-2">
         <i class="nav-icon i-Close-Window font-weight-bold"></i>
   </a>
</center>
                                        
<form  id="delete-form-{{$kelas->id}}" style="display:none;" action="{{ $url_destroy }}"  method="POST">
       {{ @csrf_field() }}
       {{@method_field('DELETE')}}
   </form>