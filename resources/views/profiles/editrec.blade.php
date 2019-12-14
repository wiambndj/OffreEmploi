<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Modifier </h4></div>

                <div class="panel-body">
                    <form action="{{ route('profilerec.update1') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                        <div class="form-group">
                              <label for="name">name</label>
                              <input type="text" name="name" value="{{ $info->name }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="lastname">lastname</label>
                              <input type="text" name="lastname" value="{{ $info->lastname }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="phone">numero de telephone</label>
                              <input type="text" name="phone" value="{{ $info->phone }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" name="email" value="{{ $info->email }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                          Save your information
                                    </button>
                              </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
