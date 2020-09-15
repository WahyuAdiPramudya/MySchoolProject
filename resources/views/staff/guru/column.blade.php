<center>
<a  href="{{ $url_edit}}" class="btn btn-outline-primary btn-rounded btn-sm" >
                                           Setting
                                        </a>

&nbsp;&nbsp;&nbsp;
<a type="button" onclick="deleteguru({{ $data->id }})" class="text-danger mr-2">
         <i class="nav-icon i-Close-Window font-weight-bold"></i>
   </a>
</center>
                                        
<form  id="delete-form-{{$data->id}}" style="display:none;" action="{{ $url_destroy }}"  method="POST">
       {{ @csrf_field() }}
       {{@method_field('DELETE')}}
   </form>