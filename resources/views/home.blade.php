@extends('layouts.app')

@section('content')
<div class="container home-cont">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row pt-5 pb-4">
              <div class="col-md-3">
                <img src="/svg/user.jpeg" class="codegram-user rounded-circle" alt="">
              </div>
              <div class="col-md-9 pl-5">
                <div class="row">
                    <div class="p-username">
                        <h3 class="">{{$user->username}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="followers d-flex">
                        <p class=""><b>39</b> posts</p>
                        <p class="pl-4"><b>269</b> followers</p>
                        <p class="pl-4"><b>2k</b> following</p>
                    </div>
                </div>
                <div class="row">
                    <div class="p-caption pt-2 mb-0">
                        <p><b>Johnson</b></p>
                        <div class="user-logs">
                            <p>Try to keep it real</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row pt-1">
                <div class="p-images col-md-4">
                    <img src="/svg/jo.jpg" alt="">
                </div>
                <div class="p-images col-md-4">
                    <img src="/svg/jo.jpg" alt="">
                </div>
                <div class="p-images col-md-4">
                    <img src="/svg/jo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
