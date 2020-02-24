{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($category) ? $category->name : '' }}" class="form-control @error('name') is-invalid @enderror">
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
        <i class="material-icons prefix">description</i>
        <textarea id="meta_des3" class="materialize-textarea" style="height: 46px;" name="meta_des" class="form-control @error('meta_des') is-invalid @enderror">{{ isset($category) ? $category -> meta_des : '' }}</textarea>
        <label for="meta_des3">Page Description</label>
        @error('meta_des')
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

