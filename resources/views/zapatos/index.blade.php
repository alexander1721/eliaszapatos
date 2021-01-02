@extends('layouts.app')
@section('botones')
<a type="button" class="btn btn-primary" href="">Registrar Zapatos</a>
@endsection
@section('content')
    <h2 class="text-center mb-5"> zapatos</h5>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">zapato</th>
                    <th scole="col">talla</th>
                    <th scole="col">modelo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>adidas</td>
                    <td>29</td>
                    <td>correr</td>
                   

                </tr>
                <tr>
                    <td>umbro</td>
                    <td>40</td>
                    <td>micropupos</td>
                   

                </tr>
            </tbody>
        </table>
    </div>
@endsection