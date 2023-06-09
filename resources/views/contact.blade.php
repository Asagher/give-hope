@extends('layouts.app')
@section('content')
    <div class="pt-32">
        <h1 class="main-title-a">تواصل معنا</h1>
        <section class="contact">
            <div class="container contact-container bg-green-400">
                <aside class="contact-aside bg-green-100 ">
                    <div class="aside-img">
                        {{-- <img src="./images/contact.svg" alt="contact"> --}}
                    </div>
                    <p class="leading-6">  نحن واحدة من أكبر الهيئات الخيرية غير الحكومية الرائدة في الخليج تأسست عام 1992م من أجل تطوير المجتمع والمجتمعات المعوزة. وتعمل في مجالات مختلفة والتي من أهمها التنمية المستدامة، محاربة الفقر وإغاثة المنكوبين في حالات الطوارئ</p>
                    <ul class="contact-details">
                        <li>
                            <h5>+234567890</h5>
                            <i class="fas fa-phone-volume fa-fw"></i>
                        </li>
                        <li>
                            <h5>Wesal@gmail.com</h5>
                            <i class="fas fa-envelope fa-fw"></i>
                        </li>
                        <li>
                            <h5>سوريا</h5>
                            <i class="fas fa-map-marked-alt fa-fw"></i>
                        </li>
                    </ul>
                    <ul class="contact-socials">
                        <li>
                            <a class="px-1" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="px-1" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="px-1" href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
    
    
                <form class="contact-form">
                    <div class="form-name">
                        <input class="text-right" type="text" name="Last Name" placeholder="الأسم الأخير" required>
                        <input class="text-right" type="text" name="First Name" placeholder="الأسم الأول" required>
                    </div>
                    <input class="text-right" type="email" name="Email Adress" placeholder="عنوان البريد الإلكتروني" required>
                    <textarea class="text-right" name="Message" rows="7" placeholder="الرسالة" required></textarea>
                    <button type="submit" class="btn btn-primary ">إرسال</button>
                </form>
            </div>
        </section>
    </div>
@endsection