{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($doctor) ? $doctor->name : '' }}" class="form-control @error('name') is-invalid @enderror">
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
        <input id="address3" type="text" name="address" value="{{ isset($doctor) ? $doctor->address : '' }}" class="form-control @error('address') is-invalid @enderror">
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
        <i class="material-icons prefix">class</i>
        <input id="specialization3" type="text" name="specialization" value="{{ isset($doctor) ? $doctor->specialization : '' }}" class="form-control @error('specialization') is-invalid @enderror">
        <label for="specialization3">Specialization</label>
        @error('specialization')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">class</i>
        <input id="workplace3" type="text" name="workplace" value="{{ isset($doctor) ? $doctor->workplace : '' }}" class="form-control @error('workplace') is-invalid @enderror">
        <label for="workplace3">Workplace</label>
        @error('workplace')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">class</i>
        <input id="experience3" type="text" name="experience" value="{{ isset($doctor) ? $doctor->experience : '' }}" class="form-control @error('experience') is-invalid @enderror">
        <label for="experience3">Years Experience</label>
        @error('experience')
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
            <span>Doctor Image</span>
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

