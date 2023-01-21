@extends('students.layout')

@section('content')


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <div class="pull-left">
    <h2>Students crud step by step</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-left: 10px">
        <div class="pull-right">
             <a class="" href="#{{route('students.create')}}">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
            Enregistrement Rapide
        </button>
            </a>
        </div>
    </div>
</div><br>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif


{{-- data table --}}

<table id="students" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe</th>
        <th>Date de créer</th>
        <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->nom}}</td>
        <td>{{$student->prenom}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->motdepass}}</td>
        <td>{{$student->created_at->format('d m Y à H:i')}}</td>
        <td>
            <form action="{{route('students.destroy', $student->id)}}" method="post">
                <a class="btn btn-info text-white" href="{{route('students.show', $student->id)}}">Show</a>
                <a class="btn btn-success text-white" href="{{route('students.edit', $student->id)}}">Editer</a>
                <a class="" href="{{route('students.destroy', $student->id)}}">
                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </a>
            </form>
        </td>
    </tr>
    @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    <!-- Extra Large Modal -->
              {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                Extra Large Modal
              </button> --}}

              <div class="modal fade" id="ExtralargeModal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Create a new student</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">

</div>

  @if($errors->any())

  <div class="alert alert-danger">
        <strong>whoops!</strong> There were problems with input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
  </div>

  @endif
  <form action="{{route('students.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom" value="" class="form-control" placeholder="Entrez votre nom">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom</strong>
                <input type="text" name="prenom" value="" class="form-control" placeholder="Entrez votre prenom">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="" class="form-control" placeholder="Entrez votre email">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mot de passe</strong>
                <input type="password" name="motdepass" value="" class="form-control" placeholder="Entrez votre mot de passe">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
    </div>

  </form>

                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
    	$(document).ready(function () {
    $('#students').DataTable();
});
    </script>
</div>

@endsection
