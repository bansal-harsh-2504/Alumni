@extends('layouts.app')
@section('content')
<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>Students of <span style="color: goldenrod !important;">Lovely Professional University</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="about" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->
    </div>

</section>
<!--== Slider Area End ==-->
<!--== Upcoming Event Area Start ==-->
<section id="upcoming-area" style="background: #FDF6F0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming events</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        <!-- No 1 Event -->
                        @if(count($events)>0)
                        @foreach($events as $event)
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="/storage/cover_images/{{$event->image}}" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">{{$event->eventdate}}</h4>
                                        <br>
                                        <i class="fa fa-map-marker"></i>&nbsp;{{$event->location}}
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="{{$event->eventdate}}"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="/event-details/{{$event->id}}">{{$event->title}}</a></h3>
                                                <p> {!! str_limit($event->details, $limit = 250, $end = '...') !!}</p>
                                                <a href="/event-details/{{$event->id}}" class="btn btn-brand btn-brand-dark">View details about the event</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- partial -->
                        @else
                        <div class="alert alert-danger" role="alert">
                            <p>No upcoming events.</p>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Our Objectives</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="assets/img/bg1.JPG" alt="" class="img-fluid">
                        </div>

                        <ul>
                            <li>
                                a). To foster social and intellectual engagement between Lovely Professional University (LPU) and its Alumni, as well as among current students.
                                <p></p>
                                b). To actively contribute to the growth and development of the University through participation in institutional projects and initiatives.
                                <p></p>
                                c). To promote, uphold, and safeguard the interests and welfare of Alumni members and current students.
                                <p></p>
                                d). To recognize, celebrate, and support scholarship and academic excellence within LPU and among its members.
                                <p></p>
                                e). To preserve, nurture, and advance the academic and cultural traditions that define the unique identity of LPU.
                                <p></p>
                                f). To establish and strengthen collaborative relationships with other Alumni bodies and organizations, both within India and internationally.
                                <p></p>
                                g). To engage in national and global development efforts that enhance the reputation and impact of both the Alumni Association and LPU.
                                <p></p>
                                h). To initiate and implement sustainable fundraising strategies to support Alumni activities and collaborative projects with the University.
                            </li>

                        </ul>
                        <a href="/about" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-6 col-sm-12">
                <div class="single-responsibility">
                    <center>
                        <img src="img/responsibility/01.png" alt="Responsibility">
                    </center>

                    <h4 class="text-center">Vision</h4>
                    <hr>
                    <p>
                        Lovely Professional University envisions becoming a center of excellence in education, research, and innovation, dedicated to nurturing global leaders and responsible citizens. It strives to provide a transformative learning experience through a multidisciplinary approach, cutting-edge infrastructure, and a commitment to academic excellence. LPU aims to empower students with critical thinking, creativity, and ethical values to meet the challenges of an ever-evolving world. By fostering inclusivity, diversity, and a culture of continuous learning, the university seeks to inspire innovation and social responsibility, making a positive impact on society, industry, and the global academic community.
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-6 col-sm-12">
                <div class="single-responsibility">
                    <center>
                        <img src="img/responsibility/02.png" alt="Responsibility">
                    </center>

                    <h4 class="text-center">Mission</h4>
                    <hr>
                    <p>
                        Lovely Professional University is committed to delivering quality education that combines academic rigor with practical relevance. Its mission is to cultivate a stimulating environment that promotes intellectual curiosity, skill development, and professional competence. LPU emphasizes innovation, entrepreneurship, and research to bridge the gap between theory and practice. The university is dedicated to fostering an inclusive and student-centric culture that celebrates diversity and supports holistic development. Through strong industry linkages, global partnerships, and community engagement, LPU aims to produce competent graduates who are socially responsible, globally aware, and ready to lead and contribute to a sustainable and progressive world.
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->



        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->


@endsection