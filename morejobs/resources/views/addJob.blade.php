@extends('layouts.main')
@section('content')

<!-- content will go here  -->

<div class="container">
  <div class="row">
    <div class="col">
      <h1 style="margin-top: 120px;">Add Job Now</h1>

      <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Add Jobs</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- Jobs name -->
            <input type="text" id="defaultRegisterFormJobsName" class="form-control" placeholder="Job name">
        </div>
        <div class="col">
            <!-- Job Category -->
            <input type="text" id="defaultRegisterFormJobCategory" class="form-control" placeholder="Job Category">
        </div>
    </div>
    <div class="form-group">

    </div>
    <!-- Job Location -->
    <input type="text" id="defaultRegisterJobLocation" class="form-control" placeholder="Job Location" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <!-- Job Date -->
    <input type="date" id="defaultRegisterJobDate" class="form-control mt-3" placeholder="Pick Up A Date" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <!-- job spec -->
    <textarea class="form-control rounded-0 mt-3" id="exampleFormControlTextarea2" rows="3" placeholder="Job Spec"></textarea>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
</form>
<!-- Default form register -->
    </div>

  </div>
</div>
@endsection
