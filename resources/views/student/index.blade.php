@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                แสดงข้อมูลนักศึกษา [ทั้งหมด{{ $count }}คน]                
                </div>

                <div class="card-body">
                <table class="table table-striped">
                ระบบการจัดการข้อมูลนักศึกษา
                <tr>
                    <th>รหัส</th>
                    <th>รหัสกลุ่ม</th>
                    <th>ชื่อนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สาขา</th>
                    <th>คณะ</th>

                </tr>  
                @foreach ($student as $student)  
                <tr>
                            <td>{{$student->stu_code}}</td>
                            <td>{{$student->stu_group_id}}</td>
                            <td>{{$student->stu_pre}}</td>
                            <td>{{$student->stu_fname}}</td>
                            <td>{{$student->stu_lname}}</td>
                            <td>{{$student->major_id}}</td>
                            <td>{{$student->fac_id}}</td>
                </tr>
                @endforeach
                </table>
                
                 $student->render() !!}//

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
