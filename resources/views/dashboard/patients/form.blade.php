{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($patient) ? $patient->name : '' }}" class="form-control @error('name') is-invalid @enderror">
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
        <i class="material-icons prefix">my_location</i>
        <input id="address3" type="text" name="address" value="{{ isset($patient) ? $patient->address : '' }}" class="form-control @error('address') is-invalid @enderror">
        <label for="address3">Address</label>
        @error('address')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">description</i>
        <textarea id="description3" class="materialize-textarea" style="height: 46px;" name="description" class="form-control @error('description') is-invalid @enderror">{{ isset($patient) ? $patient -> description : '' }}</textarea>
        <label for="description3">Page Description</label>
        @error('description')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
<div class="input-field col s12">
    <div class="file-field input-field">
        <div class="file-path-wrapper">
            <i class="material-icons prefix" style="margin-left: -10px">photo</i>
            <label for="phone3">Image</label><hr style="width: 97%;color: #4f5467;margin-left: 35px">
        </div>
        <div class="btn cyan" style="position: absolute;top: -4px;left: 290px;">
            <span>Patient Image</span>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
        </div>
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
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

