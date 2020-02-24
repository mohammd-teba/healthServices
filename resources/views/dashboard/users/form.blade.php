{{ @csrf_field() }}
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="name3" type="text" name="name" value="{{ isset($user) ? $user->name : '' }}" class="form-control @error('name') is-invalid @enderror">
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
        <input id="email3" type="email" name="email" value="{{ isset($user) ? $user->email : '' }}" class="form-control @error('email') is-invalid @enderror">
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
        <input id="phone3" type="tel" name="phone" value="{{ isset($user) ? $user->phone : '' }}" class="form-control @error('phone') is-invalid @enderror">
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
        <i class="material-icons prefix">lock_outline</i>
        <input id="password3" type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        <label for="password3">Password</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">lock_outline</i>
        <select name="{{ 'group' }}" class="form-control @error('group') is-invalid @enderror">
            <option value="doctor" {{ isset($user) && $user->{'group'} == 'doctor' ? 'selected' :'' }} > Doctor </option>
            <option value="patient" {{ isset($user) && $user->{'group'} == 'patient' ? 'selected' :'' }} > Patient</option>
        </select>
        <label for="group">Group</label>
        @error('group')
        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
        @enderror
    </div>
</div>
{{--                        <div class="row">--}}
{{--                            <div class="input-field col s12">--}}
{{--                                <i class="material-icons prefix">question_answer</i>--}}
{{--                                <textarea id="message3" class="materialize-textarea" style="height: 46px;"></textarea>--}}
{{--                                <label for="message3">Phone</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
