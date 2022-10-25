@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://cdn-icons-png.flaticon.com/512/2202/2202129.png" style="height:150px;"class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div><strong>153</strong> posts</div>
                    <div class="px-3"><strong>23k</strong> followers</div>
                    <div class="px-3"><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://images.squarespace-cdn.com/content/v1/5accb37996e76f10e151b0f9/1598543092323-9S8DP0AEE4F7VSBP88XZ/50234103591_81c88c5aec_k.jpg"
                    class="w-100">
            </div>
            <div class="col-4">
                <img src="https://images.iphonephotographyschool.com/5732/Squre-Composition-01.jpg" class="w-100">
            </div>

            <div class="col-4">
                <img src="https://images.squarespace-cdn.com/content/v1/61505c55c04b0a138b337894/1645392354605-KP1A18JWX5FAWEV29EAS/image-asset.png"
                    class="w-100">
            </div>
        </div>
    </div>
@endsection
