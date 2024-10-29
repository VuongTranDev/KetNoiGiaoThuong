@php
    $footerGridOnes = Cache::rememberForever('footer_grid_one', function () {
        return \App\Models\FooterGridOne::first();
    });
    $footerSocials = Cache::rememberForever('footer_socials', function () {
        return \App\Models\FooterSocial::where('status', 1)->get();
    });
    $footerGridTwoLinks = Cache::rememberForever('footer_grid_two', function () {
        return \App\Models\FooterGridTwo::where('status', 1)->get();
    });
    $footerTitle = \App\Models\FooterTitle::first();
    $footerGridThreeLinks = Cache::rememberForever('footer_grid_three', function () {
        return \App\Models\FooterGridThree::where('status', 1)->get();
    });
@endphp

<section class="contact-section py-4 mt-3">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3">Liên hệ với chúng tôi</h3>
                <hr class="line-title" style="background-color: #fff;">
                <p>Mọi thông tin liên hệ, xin vui lòng liên hệ số hotline</p>
                <div class="ms-4">
                    <p><i class="fas fa-phone-alt me-2"></i> 0936 573 657</p>
                    <p><i class="fas fa-phone-alt me-2"></i> 0382 375 985</p>
                </div>

                <ul class="list-unstyled">
                    <li><i class="fas fa-circle me-2"></i>VietSunCo luôn đem sự hài lòng cho quý khách khi đồng hành.
                    </li>
                    <li><i class="fas fa-circle me-2"></i>Khẳng định giá trị doanh nghiệp.</li>
                    <li><i class="fas fa-circle me-2"></i>VietSunCo luôn đồng hành cùng bạn.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" placeholder="Họ và tên" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập họ và tên.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập số điện thoại.
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập email hợp lệ.
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" id="message" rows="4" placeholder="Lời nhắn..." required></textarea>
                        <div class="invalid-feedback">
                            Vui lòng nhập lời nhắn.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane me-2"></i>Gửi
                            thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer_2">
    <div class="container-xl">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-sm-7 col-md-6 col-lg-3">
                <div class="wsus__footer_content">
                    <a class="wsus__footer_2_logo" href="{{ url('/') }}">
                        <img src="{{ asset(@$footerGridOnes->logo) }}" alt="logo">
                    </a>
                    <a class="action" href="tel:{{ @$footerGridOnes->phone }}"><i
                            class="fas fa-phone-alt me-2"></i>{{ @$footerGridOnes->phone }}</a>
                    <a class="action" href="mailto:{{ @$footerGridOnes->email }}"><i
                            class="far fa-envelope me-2"></i>{{ @$footerGridOnes->email }}</a>
                    <a class="action"
                        href="https://www.google.com/maps/search/{{ urlencode(@$footerGridOnes->address) }}"
                        target="_blank"><i class="fa-solid fa-location-dot me-2"></i>{{ @$footerGridOnes->address }}</a>
                    <ul class="wsus__footer_social">
                        @foreach ($footerSocials as $link)
                            <li><a class="behance" href="{{ $link->url }}"><i class="{{ $link->icon }}"></i></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>{{ $footerTitle->footer_grid_two_title }}</h5>
                    <ul class="wsus__footer_menu">
                        @foreach ($footerGridTwoLinks as $link)
                            <li><a href="{{ $link->url }}"><i class="fas fa-caret-right"></i>
                                    {{ $link->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>{{ $footerTitle->footer_grid_three_title }}</h5>
                    <ul class="wsus__footer_menu">
                        @foreach ($footerGridThreeLinks as $link)
                            <li><a href="{{ $link->url }}"><i class="fas fa-caret-right"></i>
                                    {{ $link->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-7 col-md-8 col-lg-5">
                <div class="wsus__footer_content wsus__footer_content_2">
                    <h3>Subscribe To Our Newsletter</h3>
                    <p>Get all the latest information on Events, Sales and Offers.
                        Get all the latest information on Events.</p>
                    <form action="" method="POST" id="newsletter" class="d-flex">
                        @csrf
                        <input type="text" placeholder="Email" name="email" class="newsletter_email">
                        <button type="submit" class="common_btn subscribe_btn">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="wsus__footer_bottom">
        <div class="container-xl">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__copyright d-flex justify-content-center">
                        <p>{{ @$footerGridOnes->copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    (function() {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
