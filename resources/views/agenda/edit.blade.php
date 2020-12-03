@extends('layout')
@section('content')
<br><br>

<div class="container p-5">
      <div class="row">
          <div class="col-md-4 offset-md-4 animate__animated animate__rubberBand">
              <div class="card">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>Editar Contacto</h3>
                  </div>
                  <div class="card-body text-dark">
                      <form method="POST" action="{{ route('portfolio.update', $contacto) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            {!! $errors->first('name', '<small> :message </small>') !!}
                            <input type="text" name="name" class="form-control" placeholder="Apellidos y Nombres" value="{{ $contacto->name }}">
                        </div>
                        <div class="form-group">
                            {!! $errors->first('email', '<small> :message </small>') !!}
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $contacto->email }}">
                        </div>
                        <div class="form-group">
                            {!! $errors->first('phone', '<small> :message </small>') !!}
                            <input type="number" name="phone" id="teléfono" class="form-control" placeholder="Teléfono" value="{{ $contacto->phone }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-check"></i> Actualizar</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection