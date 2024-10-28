<?php

//you can use it or test

use App\Models\Employer;
use App\Models\Job;

it('it belongs to an employer', function () {
    //AAA =>  2-Act 3-Assert

    // 1 - Arrange

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});


it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
