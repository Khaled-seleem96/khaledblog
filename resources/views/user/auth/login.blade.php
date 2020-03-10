@extends('user.layouts.app')

@section('user')
            
            
            <div class="limiter">
                <div class="container-login100">
                    <div class="login100-more" style="background-image: url('img/section.jpg');">
                        <div class="tcarousel text" >
                            <img src="img/logo.png" width="21.9%" alt="janahalamirah" style="margin-left: 20px;" >
                            <h1  >جناح الأميرة</h1>
                            <h2 >للديكور و المفروشات</h2>
                            </div>
                    </div>
        
                    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" >
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-59 text" style="display: flex;justify-content: center ;">                
                                تسجيل الدخول</span>
        
                            <div class="col-md-12">
                                <span class="text" style="float: right;" >البريد الالكتروني</span>
                                <input class="form-control" type="email" required name="email" placeholder="البريد الالكتروني">
                                <span class="focus-input100"></span>
                            </div>
        
                            <div class="col-md-12">
                                <span class="text" style="float: right;" >كلمة المرور</span>
                                <input class="form-control" type="password" required name="pass" placeholder="كلمة المرور">
                                <span class="focus-input100"></span>
                            </div>
        
                            <input type="submit" value="الدخول" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 20px;width: 100%;">
        
                                
                        </form>
                        <a href="{{route('reg')}}" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 20px;width: 100%;">
                            مستخدم جديد
                        </a>
                    </div>
                </div>
            </div>

        </div>  
     @endsection