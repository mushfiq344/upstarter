<div class="form-group col-md-12">
    <label for="inputState">Country:</label>
    <select id="country_select" class="form-control" name="country_id">
        <option value="">Choose...</option>
        @foreach($countries as $country)
            <option value="{{$country->country_id}}">{{$country->country_name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-md-12">
    <label for="inputState">State:</label>
    <select id="state_select" class="form-control" name="state_id">
        <option value="">Choose...</option>
        @if(!empty($object))
            @foreach($states as $state)
                <option value="{{$state->state_id}}">{{$state->state_name}}</option>
            @endforeach
        @endif
    </select>
</div>
<div class="form-group col-md-12">
    <label for="inputState">city:</label>
    <select id="city_select" class="form-control" name="city_id">
        <option value="">Choose...</option>
        @if(!empty($object))
            @foreach($cities as $city)
                <option value="{{$city->city_id}}">{{$city->city_name}}</option>
            @endforeach
        @endif
    </select>
</div>

@if(!empty($object))
    <script>
        $("#country_select").val('{{$object->country_id}}');
        $("#state_select").val('{{$object->state_id}}');
        $("#city_select").val('{{$object->city_id}}');
    </script>
@endif


<script>
    $('#country_select').on('change', function () {
        $("#state_select").html("");
        $("#state_select").append(new Option("Choose...", ""));
        $("#city_select").html("");
        $("#city_select").append(new Option("Choose...", ""));
        //alert(this.value);
        $.ajax({
            data: {country_id: this.value},
            type: "GET",
            url: '{{route('get_states')}}',
            cache: false,
            success: function (resp) {
                for (var i = 0; i < resp.length; i++) {
                    $("#state_select").append(new Option(resp[i]['state_name'], resp[i]['state_id']));
                }
                //console.log(resp[17]['state_name']);
            }
        });
    });

    $('#state_select').on('change', function () {
        $("#city_select").html("");
        $("#city_select").append(new Option("Choose...", ""));
        //alert(this.value);
        $.ajax({
            data: {state_id: this.value},
            type: "GET",
            url: '{{route('get_cities')}}',
            cache: false,
            success: function (resp) {
                console.log(resp);
                for (var i = 0; i < resp.length; i++) {
                    $("#city_select").append(new Option(resp[i]['city_name'], resp[i]['city_id']));
                }
                //console.log(resp[17]['state_name']);
            }
        });
    });
    $('#city_select').on('change', function () {
        //alert(this.value);
    });
</script>