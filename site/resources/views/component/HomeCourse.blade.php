<div class="container section-marginTop text-center">
    <h1 class="section-title"> COURSES </h1>
    <h1 class="section-subtitle">We provides different kind of IT courses</h1>
    
 
    <div class="row">
        @foreach ($CoursesData as $CoursesData)
        <div class="col-md-4 thumbnail-container">
                <img src="{{$CoursesData->course_img}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title">{{$CoursesData->course_name}}</h1>
                    <h1 class="thumbnail-subtitle">{{$CoursesData->course_des}}</h1>
                    <h1 class="thumbnail-subtitle">{{$CoursesData->course_fee}} | {{$CoursesData->course_totalenroll}}</h1>
                    <a target="_blank" href="{{$CoursesData->course_link}}" class="normal-btn btn">Start Now</a>
                </div>
        </div>
        @endforeach
    </div> 
   
    
</div>