@extends('layouts.app')
@section('content')
    <div class="py-9">
        <div class="bg-about-a about-head-a">
            <h1 class="main-title-a">حول</h1>
        </div>
          <div class="team " id="team">
            <h2 class="main-title-a ">فريق العمل</h2>

            <div class="container ">
                <div class="box ">
                    <div class="data ">
                        <img src="{{'img/1.png'}}" alt=" ">
                        <div class="social ">
                            <a href="# "><i class="fab fa-facebook-f "></i></a>
                            <a href="# "><i class="fab fa-twitter "></i></a>
                            <a href="# "><i class="fab fa-linkedin-in "></i></a>
                            <a href="# "><i class="fab fa-youtube "></i></a>
                        </div>
                    </div>
                    <div class="info ">
                        <h3>Wesal Haj Hassan</h3>
                        <p>Simple Short Description</p>
                    </div>
                </div>
                <div class="box ">
                    <div class="data ">
                        <img src="{{'img/2.png'}}" alt=" ">
                        <div class="social ">
                            <a href="# "><i class="fab fa-facebook-f "></i></a>
                            <a href="# "><i class="fab fa-twitter "></i></a>
                            <a href="# "><i class="fab fa-linkedin-in "></i></a>
                            <a href="# "><i class="fab fa-youtube "></i></a>
                        </div>
                    </div>
                    <div class="info ">
                        <h3>Forat Bakayaa</h3>
                        <p>Simple Short Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection