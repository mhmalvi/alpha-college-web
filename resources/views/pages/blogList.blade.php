@php
$date = date("M d, Y", strtotime($blog->created_at));
@endphp
<article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
    <div class="image">
        <img src="{{asset('storage/blogs/'.$blog->thumbnail)}}" alt="blog" class="border_radius">
    </div>
    <h3 class="top25 blog-title">{{$blog->blog_title}}</h3>
    <ul class="comment margin10">
        <li><a href="#."><i class="icon-icons20"></i>{{$date}}</a></li>
        <li><a href="#."><i class="icon-user"></i> {{$blog->user->name}}</a></li>
    </ul>
    <p class="margin10">
        {{$blog->blog_summery}}
    </p>
    <a class=" btn_common btn_border margin10 border_radius heading_space" href="{{route('blogDetail', $blog->blog_slug)}}">Read More</a>
</article>