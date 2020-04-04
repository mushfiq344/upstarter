@if($type!='subscribers')
<a href="{{route('edit',['type'=>$type,'id'=>$object->id])}}">
    <button href="" type="button" class="btn btn-link">Edit</button>
</a>

<button type="button" class="btn btn-danger" onclick="delete_object('{{$type}}','{{$object->id}}')">Delete
    </button> @endif