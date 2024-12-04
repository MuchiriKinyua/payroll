<?php

namespace App\Repositories;

use App\Models\Employeerecord;
use App\Repositories\BaseRepository;

class EmployeerecordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'employee_id',
        'record_type',
        'record_date',
        'record_description',
        'outcome',
        'comments',
        'handled_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employeerecord::class;
    }
}
