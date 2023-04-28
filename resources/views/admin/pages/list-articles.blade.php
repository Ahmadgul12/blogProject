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
                            <strong>List of Articles </strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="table-responsive">
                                <table class="table  table-data">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Contents</th>
                                            <th>Views</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Is_public</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)

                                        <tr>
                                            <td>{{ $article->title }}</td>
                                            <td><textarea name="" id="" cols="10" rows="3">{{ $article->contents }}</textarea></td>
                                            <td>{{ $article->views}}</td>
                                            <td>{{ $article->category->name }}</td>
                                            <td>{{ $article->author->name  }}</td>
                                            @php
                                            $is=$article->is_public;
                                            @endphp
                                            @if ($is==1)
                                            <td>Public</td>
                                            @else
                                            <td>private</td>
                                            @endif
                                            {{--<td>{{ $article->is_public }}</td>--}}
                                            <td><img src="{{ asset('article_cover/'.$article->cover_image_path)}}" alt="" srcset=""></td>
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