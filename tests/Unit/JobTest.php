<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    use RefreshDatabase; // يضمن إعادة تعيين قاعدة البيانات بعد كل اختبار

    public function test_job_belongs_to_employer()
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->for($employer)->create();

        $this->assertEquals($employer->id, $job->employer->id);
    }

}