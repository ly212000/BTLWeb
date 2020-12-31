@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container product-detail-area">
        <div class="row">
                <div class="col-md-8">
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">NGUYÊN TẮC</a>
                                                </h4>
                                        </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                                <ul>
                                                    <li>Nhân vệ sinh  khi thực hiện nhiệm vụ vệ sinh phải mang đầy đủ phương tiện bảo hộ cá nhân: khẩu trang, găng tay, áo choàng, mũ,...</li>
                                                    <li>Làm ẩm đối với mọi quy trình vệ sinh, không quét khô.kết hợp với máy hút bụi để hút hết những bụi tại nơi làm vệ sinh</li>
                                                    <li>Thu gom rác thải , rác thô và phân loại từng loại rác ra để đưa về nơi xử lí rác , trước khi lau, vệ sinh bề mặt.</li>
                                                    <li>Làm vệ sinh đi từ khu sạch nhất đến khu bẩn nhất, từ trên xuống dưới và từ trong ra ngoài.</li>
                                                    <li>Sử dụng dụng cụ vệ sinh riêng biệt đảm bảo vệ sinh chuyên , sau khi sử dụng vệ sinh công nghiệp xong để gọn đồ đạc vào gọn vào nơi quy định</li>
                                                    <li>Cần làm vệ sinh ngay những nơi có bị mất vệ sinh nhất , những nơi có nhiều rác thải bẩn dễ gây bẩn gây ô nhiễm cho những nơi khác.</li>
                                                    <li>Sau khi làm vệ sinh xong giẻ lau phải được giặt sạch phơi khô dưới nắng.</li>
                                                    <li>Khu vực nguy cơ cao cần sử dụng tải lau nhà 1 lần, có máy giặt riêng</li>
                                                    <li>Sử dụng đúng dung dịch làm sạch và khử khuẩn đúng nồng độ đã quy định.</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Phân loại theo vùng</a>
                                                </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                        <ul>
                                                                <li>Vùng sạch</li>
                                                                <li>Vùng kém sạch</li>
                                                                <li>Vùng rác thải xây dựng</li>
                                                                <li>Vùng vệ sinh tinh , vùng nhiều rác thải thô cứng</li>
                                                                <li>Vùng vệ sịnh ô nhiễm, vệ sinh khu vực vệ sinh</li>                               
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Quy Trình Làm Việc</a>
                                                </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                        <ul>Quý khách có nhu câù liên hệ với bộ phận kinh doanh của chúng cho biết nhu cầu dịch vụ vệ sinh. Sau đó bộ phận kinh doanh của chúng tôi sẽ tiến hành khảo sát thực tế và lên phương án thi công và báo giá chính xác cho quý khách. Sau khi quý khách đồng ý chúng tôi sẽ tiến hành kí hợp đồng cam kết tiến độ  cũng như cam kết về chất lượng dịch vụ, chúng tôi sẽ tiến hành thi công làm vệ sinh theo hợp đồng kí thỏa thuận của hai bên. Tiếp đó chúng tôi sẽ tiến hành nghiệm thu bàn giao mặt bằng khu chúng tôi làm vệ sinh công nghiệpsau khi đã bàn giao xong công ty chúng tôi sẽ tiến hành thanh toán và thanh lí hợp đồng cho quý khách</ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        <div class="col-md-4">
                <h4>Liên hệ với chúng tôi:<br><br>
                Địa chỉ 1:<br>
                295 Trung Kính - Yên Hòa - Cầu Giấy.<br>
                Tel: 024.22.444.222<br>
                Hotline: 0788.444.222<br>
                Website: www.cleanexpress.vn<br>
                Email info@cleanexpress.vn<br><br>

                Địa chỉ 2:<br>
                68/10 Đào Duy Anh - P.9 - Q. Phú Nhuận.<br>
                Tel: 028.399.76.222<br>
                Hotline: 08 399 76 222<br>
                Website: www.cleanexpress.vn<br>
                Email info@cleanexpress.vn<br>
                </h4>
        </div>
</div>
@endsection