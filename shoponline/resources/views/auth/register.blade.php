@extends('app')

@section('title')Simpleone |Đăng kí tài khoản @endsection

@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Đăng kí tài khoản</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Đăng kí tài khoản</span><span class="subtext">Đăng kí thông tin cá nhân với chúng tôi</span></h1>
          @include('errors.check')
          <form class="form-horizontal" role="form" method="POST" action="{!! URL::to('/auth/register') !!}">
          	<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="registerbox">
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span>Họ và tên:</label>
                  <div class="controls">
                    <input class="input-xlarge" type="text" autocomplete="off" id="name" placeholder="Họ và tên" name="name"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Số điện thoại:</label>
                  <div class="controls">
                    <input class="input-xlarge" type="text" autocomplete="off" id="telephone" placeholder="Số điện thoại" name="telephone"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Đ/c Email:</label>
                  <div class="controls">
                    <input class="input-xlarge" type="text" id="email" placeholder="Email" name="email"/>
                  </div>
                </div>
                
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Mật khẩu:</label>
                  <div class="controls">
                    <input class="input-xlarge" type="password" autocomplete="off" id="password" placeholder="Mật khẩu" name="password"/>
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Nhập lại mật khẩu:</label>
                  <div class="controls">
                    <input class="input-xlarge" type="password" id="password_confirmation" autocomplete="off" placeholder="Nhập lại mật khẩu" name="password_confirmation"/>
                  </div>
                </div>

            <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <div class="g-recaptcha" data-sitekey="6LeamwoTAAAAANqNFpe6SFUfHnS5y0VIbuO71ujI"> </div>
                             {!! Recaptcha::render() !!}
                            </div>
                            
                       </div>
                                   </div>
            <div class="pull-right">
              <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              </label>
              Tôi đã đọc và đồng ý với  <a href="#" >Điều Khoản</a>
              &nbsp;
              <input type="Submit" class="btn btn-orange" value="Đăng kí">
            </div>
          </form>
          <div class="clearfix"></div>
          <br>
        </div>
         @include('partials.account.default')
        </div>

    </div>
  </section>
</div>        
@endsection
