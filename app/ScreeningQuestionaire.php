<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningQuestionaire extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $primaryKey = 'id';

    protected $fillable = [
    'applicant_name',
    'email',
    'phone',
    'location',
    'salary_expectation',
    'job_type',
    'stack_option',
    'post_school_obligation',
    'work_engagement'];
}
