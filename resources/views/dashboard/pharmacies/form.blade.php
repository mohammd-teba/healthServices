{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($pharmacy) ? $pharmacy->name : '' }}" class="form-control @error('name') is-invalid @enderror">
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
        <i class="material-icons prefix">email</i>
        <input id="email3" type="email" name="email" value="{{ isset($pharmacy) ? $pharmacy->email : '' }}" class="form-control @error('email') is-invalid @enderror">
        <label for="email3">Email</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input id="phone3" type="tel" name="phone" value="{{ isset($pharmacy) ? $pharmacy->phone : '' }}" class="form-control @error('phone') is-invalid @enderror">
        <label for="phone3">Phone</label>
        @error('phone')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">Fax</i>
        <input id="fax3" type="tel" name="fax" value="{{ isset($pharmacy) ? $pharmacy->fax : '' }}" class="form-control @error('fax') is-invalid @enderror">
        <label for="fax3">Fax</label>
        @error('fax')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">my_location</i>
        <input id="address3" type="text" name="address" value="{{ isset($pharmacy) ? $pharmacy->address : '' }}" class="form-control @error('address') is-invalid @enderror">
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
        <input id="meta_keywords3" type="text" name="meta_keywords" value="{{ isset($pharmacy) ? $pharmacy->meta_keywords : '' }}" class="form-control @error('meta_keywords') is-invalid @enderror">
        <label for="meta_keywords3">Page Keywords</label>
        @error('meta_keywords')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">description</i>
        <textarea id="meta_des3" class="materialize-textarea" style="height: 46px;" name="meta_des" class="form-control @error('meta_des') is-invalid @enderror">{{ isset($pharmacy) ? $pharmacy -> meta_des : '' }}</textarea>
        <label for="meta_des3">Page Description</label>
        @error('meta_des')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_balance</i>
        <label class="bmd-label-floating">Medicines</label>

        <select name="{{ 'medicines[]' }}" class="form-control @error('medicines[]') is-invalid @enderror" multiple style="height: 100px">
            @foreach($medicines as $medicine)
                <option value="{{ $medicine->id }}" {{ in_array($medicine->id , $selectedMedicines) ? 'selected' : '' }}> {{ $medicine->name }} ({{ $medicine->cost }}$) </p> </option>
            @endforeach
        </select>
        @error('medicines[]')
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
            <span>Hospital Image</span>
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

