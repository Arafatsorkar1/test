@extends('master')

@section('title')

    edit.blog

@endsection
@section('body')




    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Edit Blog</h3>
                        </div>
                        <div class="card-body">
                            <span>{{Session::get('success')}}</span>
                            <form action="{{route('update',['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">

                                @csrf


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Content</label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="" cols="30" rows="10" class="form-control" >{{$blog->content}}</textarea>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($blog->image)}}" alt="" style="height: 60px" class="mt-2">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Update Blog">
                                    </div>
                                </div>






                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





@endsection

