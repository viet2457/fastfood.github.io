@extends('layout')
@section('content')

<div class="wrap-banner container">
    <div class="col-md-6 title-content text-center" style="font-size:35px;color:orange;">
        <img src="{{asset('client/img/dot-title-left.png')}}" alt="">
             GIỚI THIỆU
        <img src="{{asset('client/img/dot-title-right.png')}}" alt="">
    </div>
                <hr>

        <div class="col-md-12 title-content text-center">
            <img src="{{asset('client/img/dot-title-left.png')}}" alt="">
                LỊCH SỬ HÌNH THÀNH & PHÁT TRIỂN
            <img src="{{asset('client/img/dot-title-right.png')}}" alt="">
        </div>
        <div class="container rotate-y">
            <p align="justify">
                Khái niệm về thực phẩm nấu sẵn để bán được kết nối chặt chẽ với sự phát triển của đô thị. Những ngôi nhà ở các thành phố mới nổi thường thiếu không gian thích hợp hoặc không có đồ chuẩn bị thức ăn thích hợp. Ngoài ra, việc mua sắm nhiên liệu nấu ăn có thể đắt ngang với sản phẩm đã mua. Chiên thực phẩm trong các thùng dầu sôi sùng sục cũng nguy hiểm vì nó đắt tiền. Chủ nhà lo sợ rằng một ngọn lửa nấu nướng không cẩn thận "có thể dễ dàng thiêu rụi cả một khu phố".Vì vậy, người dân thành thị được khuyến khích mua các loại thịt hoặc tinh bột chế biến sẵn, chẳng hạn như bánh mì hoặc mì, bất cứ khi nào có thể. </p>
        </div>
                <hr><br>
        <div class="wrap-program text-center">
            <div class="col-md-6 title-content">
                <img src="{{asset('client/img/dot-title-left.png')}}" alt="">
                    GIÁ TRỊ CỐT LÕI
                <img src="{{asset('client/img/dot-title-right.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{asset('client/img/icon-heart.png')}}" alt="Đức tính trung thực"></a>
                </div>
                <p class="program-title">Đức tính trung thực</p>
                <div>
                    <p>Giúp chúng tôi có kỷ luật cá nhân và kỷ luật tổ chức.</p>
                </div>
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{asset('client/img/icon-group.png')}}" alt="Đức tính kiên trì"></a>
                </div>
                <p class="program-title">Đức tính kiên trì</p>
                <div>
                    <p>Giúp chúng tôi thực hiện đến cùng cam kết công việc.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{asset('client/img/icon-light.png')}}" alt="Tiến hóa không ngừng"></a>
                </div>
                <p class="program-title">Tiến hóa không ngừng</p>
                <div>
                    <p>Giúp chúng tôi linh hoạt để thích nghi. </p>
                </div>
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{asset('client/img/icon-tick.png')}}" alt="Say mê sáng tạo"></a>
                </div>
                <p class="program-title">Say mê sáng tạo</p>
                <div>
                    <p>Giúp chúng tôi chủ động vượt qua các thách thức.</p>
                </div>
            </div>
        </div>
                <hr><br>
        <div class="col-md-12 title-content text-center">
            <img src="{{asset('client/img/dot-title-left.png')}}" alt="">
                THÀNH TỰU
            <img src="{{asset('client/img/dot-title-right.png')}}" alt="">
        </div>
        <div class="container rotate-y">
            <p align="justify">
                Bằng những nỗ lực không mệt mỏi, Website bán thức ăn nhanh của chúng tôi tự hào là nhà bán lẻ các thức ăn nhanh được khách hàng và các đối tác tin tưởng và yêu mến. Đó là giải thưởng và niềm tự hào vô giá của chúng tôi.
            </p>
        </div>
                <hr><br>
        <div class="col-md-12 title-content text-center">
            <img src="{{asset('client/img/dot-title-left.png')}}" alt="">
                SỨ MỆNH & TẦM NHÌN DOANH NGHIỆP
            <img src="{{asset('client/img/dot-title-right.png')}}" alt="">
        </div>
        <div class="container rotate-y">
            <p align="justify">
            Chúng tôi, bằng các sản phẩm và dịch vụ công nghệ, phấn đấu không ngừng tạo ra các lợi ích chung cho cộng đồng với giá trị cao nhất và chi phí của xã hội thấp nhất. Chúng tôi sáng tạo không ngừng để trở thành cầu nối hiệu quả nhất giữa người sử dụng và các thiết bị, giải pháp công nghệ tương lai.
            </p>
        </div>
</div>
@endsection
