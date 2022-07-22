@extends('layouts.dashboard.app')

    @section('title', 'Permission List')

    @section('dashboard_content')
    <section class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Gig {{ @$edit ? 'Update' : 'Create' }}</h3>
                        @if (@$edit)
                            <form action="" method="POST">
                        @else 
                            <form action="@route('gig.store')" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" value="{{ @$edit->title }}" name="title" id="">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Service Image <span class="text-danger">*</span></label>
                            <input  type="file" name="image[]" multiple class="form-control">
                            @if (@$edit->image)
                                @php
                                    $image = json_decode($edit->image);
                                @endphp
                                @if (empty($image))
                                    <td>Image Not Selected</td>
                                @else
                                    <td>
                                        <div class="">
                                            <span>Already Selected Image: </span>
                                            <img class="zoom" src="{{ asset($image[0]) }}" height="50px" width="50px"
                                                alt="">
                                        </div>
                                    </td>
                                @endif
                            @endif
                        </div>
                       
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea class="form-control" name="body" id="" cols="10" rows="4">
                                {{ @$edit->body }}
                            </textarea>
                        </div>

                        <div class="text-center form-group">
                            <input type="submit" class="btn btn-sm btn-success" name="" value="Submit" id="">
                        </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-8 col-sm-12">
                <section class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">                     
                            <h2 class="text-center">Gig Lists</h2>
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gigs as $gig)
                                        <tr>
                                            <th scope="row">{{$loop->index+1}}</th>
                                            <td>{{$gig->title}}</td>
                                            <td>
                                                <a class="btn btn-info" href="@route('gig.edit',$gig->gig_id)">Edit</a>
                                                <a class="btn btn-danger" href="">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    @endsection

    @section('js')
    @endsection
