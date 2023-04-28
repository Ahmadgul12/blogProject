@extends('admin.layout.master')

@section('contents')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>List of Authors </strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="table-responsive">
                                <table class="table  table-data">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Bio</th>
                                            <th>Email</th>
                                            <th>Joined</th>
                                            <th>Image</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $author)

                                        <tr>
                                            <td>{{ $author->name }}</td>
                                            <td><textarea name="" id="" cols="10" rows="2">{{ $author->bio }}</textarea></td>
                                            <td>{{ $author->email}}</td>
                                            <td>{{ $author->created_at }}</td>
                                            <td><img src="{{ asset('profile/'.$author->image_path)}}" alt="" srcset=""></td>
                                          
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Update
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

</div>

@endsection