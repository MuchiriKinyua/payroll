<!-- Department Name Field -->
<div class="col-sm-12">
    {!! Form::label('department_name', 'Department Name:') !!}
    <p>{{ $department->department_name }}</p>
</div>

<!-- Manager Id Field -->
<div class="col-sm-12">
    {!! Form::label('manager_id', 'Manager:') !!}
    <p>{{ $department->manager_id }}</p>
</div>

