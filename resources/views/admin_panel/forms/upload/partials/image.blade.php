<div class="col-md-12">
    <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="choose_cover" name="cover">
        <label class="custom-file-label" for="customFile">Choose Cover</label>
    </div>
</div>
<div class="col-4">
    <div class="text-center">
        <img id="coverPreview" src="{!! !empty($object) ? $object->image : '' !!}" height="200">
    </div>
</div>