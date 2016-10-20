<html>
<head>

<title>Data Table</title>

<link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::to('src/css/jquery.dataTable.css')}}">
<link rel="script" href="{{URL::to('src/js/jquery.dataTable.js')}}">
<link rel="script" href="{{URL::to('src/css/jquery3.1.1.js')}}">


</head>
<style type="text/css">
    .wrapper{
        width: 75%;
        margin: 0 auto;
        background: #eee;
        margin-top: 10px;
    }

</style>
<body>

<section class="panel panel-primary">

    <div class="panel-heading">
        <b>Student Info</b>
    </div>
    <div class="panel-body">
        <table class="table table-hover table-bordered student">
            <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Gender</th>
            <th>Roll</th>
            <th>Status </th>
            </thead>

             <tbody>

             @foreach ($students as $student)

                 <tr>
                     <td>{{ $student->id }}</td>
                     <td>{{ $student->first_name }}</td>
                     <td>{{ $student->last_name }}</td>
                     <td>{{ $student->email }}</td>
                     <td>{{ $student->phone }}</td>
                     <td>{{ $student->gender }}</td>
                     <td>{{ $student->roll }}</td>
                     <td>{{ $student->status }}</td>


                     <td>
                         <a href="/#/{{ $student->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                         <a href="/#/{{ $student->id }}/edit" class="btn btn-danger pull-right" style="margin-right: 3px;">Delete</a>

                     </td>
                 </tr>

             @endforeach


             </tbody>

        </table>
        {{$students->links()}}
    </div>
</section>
</body>

<script type="text/javascript">


</script>



</html>