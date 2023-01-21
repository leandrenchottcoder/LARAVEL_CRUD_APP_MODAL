@extends('students.layout')


@section('content')

{{--
<h1>Detail Student</h1>

<p>{{$student->id}}</p>
<p>{{$student->nom}}</p>
<p>{{$student->prenom}}</p>
<p>{{$student->email}}</p>
<p>{{$student->motdepass}}</p>

<div class="pull-right">
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div> --}}
<div class="container" style="margin-top:20px">
                    <h2 class="col-lg-9">Detail {{$student->nom}} {{$student->prenom}}</h2>
                     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom" value="{{$student->nom}}" class="form-control" placeholder="Entrez votre nom" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="text" name="prenom" value="{{$student->prenom}}" class="form-control" placeholder="Entrez votre prenom" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="{{$student->email}}" class="form-control" placeholder="Entrez votre email" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="password" name="motdepass" value="{{$student->motdepass}}" class="form-control" placeholder="Entrez votre mot de passe" value="Read only / Disabled" disabled>
            </div>
        </div>
                </div>

 <!-- Large Modal -->
              <div class="container text-center" style="margin-top:20px">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Afficher le details dans une modal
              </button>
              <a class="btn btn-secondary" href="{{route('students.index')}}">Retour</a>
              </div>

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Student</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom" value="{{$student->nom}}" class="form-control" placeholder="Entrez votre nom" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="text" name="prenom" value="{{$student->prenom}}" class="form-control" placeholder="Entrez votre prenom" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="{{$student->email}}" class="form-control" placeholder="Entrez votre email" value="Read only / Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="password" name="motdepass" value="{{$student->motdepass}}" class="form-control" placeholder="Entrez votre mot de passe" value="Read only / Disabled" disabled>
            </div>
        </div>

    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="{{route('students.datatable')}}">
                      <button type="button" class="btn btn-primary">Aller vers la data table</button>

                      </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->


@endsection
