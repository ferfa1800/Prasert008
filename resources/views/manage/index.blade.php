@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                ระบบการจัดการข้อมูลนักศึกษา
                <tr>
                    
                    <th>คณะ</th>

                </tr>  
                @foreach ($facultys as $facultys)  
                <tr>
                            
                            <td>{{$student->fac_id}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
