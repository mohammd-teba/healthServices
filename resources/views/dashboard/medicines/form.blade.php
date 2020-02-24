{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($medicine) ? $medicine->name : '' }}" class="form-control @error('name') is-invalid @enderror">
        <label for="name3">Name</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">assignment_ind</i>
        <input id="cost3" type="number" name="cost" value="{{ isset($medicine) ? $medicine->cost : '' }}" class="form-control @error('cost') is-invalid @enderror">
        <label for="cost3"> Cost</label>
        @error('cost')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
{{--<div class="row">--}}
{{--    <div class="input-field col s12">--}}
{{--        <i class="material-icons prefix">photo</i>--}}
{{--        <input type="file" name="image" >--}}
{{--        <label >Hospital Image</label>--}}
{{--        @error('image')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--            <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}

