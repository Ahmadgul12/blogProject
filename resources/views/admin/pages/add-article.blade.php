@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add New Article </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Article Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="title" placeholder="Enter Your Article Title" class="form-control">
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Select Author</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="author" id="select" class="form-control">
                                            <option selected>Please Select Author</option>
                                            @foreach($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Select Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" id="select" class="form-control">
                                            <option selected>Please Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Contents</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="contents" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="multiple-select" class=" form-control-label">Select Tags</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <select name="tags[]" id="multiple-select" multiple="" class="form-control">
                                           @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Make it public</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="privacy" value="0" class="form-check-input">Private
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="privacy" value="1" class="form-check-input">Public
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Article Cover Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="post_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>  

@endsection