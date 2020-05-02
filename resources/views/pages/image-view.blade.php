@extends('welcome')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-11 main-section">
                <h1 class="text-center text-default">Add or drag and drop your pictures here.</h1><br>
                
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
@endsection