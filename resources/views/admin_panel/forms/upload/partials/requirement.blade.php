<div class="col-md-12">
    <div class="form-group">
        <label for="description">Requirements:</label>
        @if(!empty($object))
            <textarea class="form-control summernote" name="requirement" >{{$object->requirement}}</textarea>
        @else
            <textarea class="form-control summernote" name="requirement" ></textarea>
        @endif

    </div>
</div>
