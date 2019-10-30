@extends('english.layouts.master')

@section('page_title')
My Courses
@endsection

@section('content')
<!-- Main Header Groups -->


<div class="container">
	<div class="row">
		<div class="col-12">
            <div class="ui-block padd startup-course" >
                <div id="create_course-steps">
                    <h3>step 1</h3>
                    <section class="startup-slide">
                       <h2>First, let's find out what type of course you're making.</h2>
                       <ul class="course-type">
                           <li>
                               <a href="">
                                 <i class="fas fa-chalkboard"></i>
                                 <h4>online couse</h4>
                                 <p> is a long established fact that a read content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
                               </a>
                           </li>
                           <li>
                               <a href="">
                                 <i class="fas fa-chalkboard-teacher"></i>
                                 <h4>class Room</h4>
                                 <p> is a long established fact that a read content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>


                               </a>
                           </li>
                       </ul>
                    </section>
                    <h3>step 2</h3>
                    <section class="startup-slide">
                        <h2>How about a working title?</h2>
                        <input class="startup-input"  placeholder="e.g. Learn social media marketing" type="text">
                       
                    </section>
                    <h3>step 3</h3>
                    <section class="startup-slide">
                        <h2>What category best fits the knowledge you'll share?</h2>
                        <select class="form-control category-select" name="category_id" required>
                                <option value="">111</option>
                                <option value="">222</option>
                                <option value="">222</option>
                        </select>
                       
                    </section>
                    <h3>step 4</h3>
                    <section class="startup-slide">
                        <h2>course expire in</h2>
                        <div id="datepicker"></div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>




<a class="back-to-top" href="#">
	<img src="{{asset('assets')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

	

@endsection

@section('script')
<script>
    $(document).ready(function() {
        
        
     
    });
</script>
@endsection
