

  				<div class="form-group @if($errors->get('titre')) has-error @endif">
  				<label for="">Titre</label>
  				<input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
                 
                 @if($errors->get('titre'))
	                  @foreach($errors->get('titre') as $message)
	     				<li>{{ $message }}</li>
	                  @endforeach
	             @endif

  				</div>

  				<div class="form-group @if($errors->get('presentation')) has-error @endif">
  				<label for="">Présentation</label>
  				<textarea name="presentation" class="form-control">{{ old('presentation') }}</textarea>

  				@if($errors->get('presentation'))
	                  @foreach($errors->get('presentation') as $message)
	     				<li>{{ $message }}</li>
	                  @endforeach
	             @endif
  				</div>

          <div class="form-group">
            <label for="">Image</label>
            <input class="form-control" type="file" name="photo">

                      @if($errors->get('photo'))
                    @foreach($errors->get('photo') as $message)
              <li>{{ $message }}</li>
                    @endforeach
               @endif
          </div>


