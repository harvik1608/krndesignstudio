@extends('include.header')
@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Blog List</h4>
        <h6>(<span class='mandadory'>*</span>) indicates required field.</h6>
    </div>
</div>
<form action="{{ is_null($blog) ? url('admin/blogs') : url('admin/blogs/'.$blog->id) }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf
    @if(!is_null($blog))
        <input type="hidden" name="_method" value="PUT" />
    @endif
    <input type="hidden" class="form-control" name="old_banner" value="{{ is_null($blog) ? '' : $blog->banner }}" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ is_null($blog) ? "New" : "Edit" }} Blog</h4>
                </div>
                <div class="card-body profile-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ is_null($blog) ? '' : $blog->title }}" autofocus />
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label class="form-label">Short Description<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="short_description" id="short_description" value="{{ is_null($blog) ? '' : $blog->short_description }}" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Is Latest News</label>
                            <select class="select" name="is_latest_news" id="is_latest_news">
                                <option value="0" {{ !is_null($blog) && $blog->is_latest_news == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ !is_null($blog) && $blog->is_latest_news == 1 ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Status</label>
                            <select class="select" name="is_active" id="is_active">
                                <option value="1" {{ !is_null($blog) && $blog->is_active == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !is_null($blog) && $blog->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Description<span class="text-danger ms-1">*</span></label>
                                <textarea class="form-control summernote" name="description" id="description">{{ is_null($blog) ? '' : $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(800X600)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <a href="{{ url('admin/blogs') }}" class="btn btn-secondary" id="backBtn">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
	var page_title = "Blog List";
    $(document).ready(function(){
        $("#mainForm").validate({
            rules:{
                name:{
                    required: true
                },
                short_description:{
                    required: true
                },
                description:{
                    required: true
                }
            },
            messages:{
                name:{
                    required: "<small class='text-danger'><b>Name is required.</b></small>"
                },
                short_description:{
                    required: "<small class='text-danger'><b>Short Description is required.</b></small>"
                },
                description:{
                    required: "<small class='text-danger'><b>Description is required.</b></small>"
                }
            }
        });
        $("#mainForm").submit(function(e){
            e.preventDefault();

            if($("#mainForm").valid()) {
                $.ajax({
                    url: $("#mainForm").attr("action"),
                    type: $("#mainForm").attr("method"),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend:function(xhr){
                        xhr.setRequestHeader("csrf-token", $("input[name=_csrf]").val());
                        $("#mainForm button[type=submit]").html('<div class="spinner-border spinner-border-sm text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>').attr("disabled",true);
                    },
                    success:function(response){
                        if(response.success) {
                            show_toast("Success!",response.message,"success");
                            setTimeout(function(){
                                window.location.href = $("#backBtn").attr("href");
                            },3000);
                        }
                    },
                    error: function(xhr, status, error) {
                        $("#mainForm button[type=submit]").html("SUBMIT").attr("disabled",false);
                        if (xhr.status === 400) {
                            const res = xhr.responseJSON;
                            show_toast("Oops!",res.message,"error");
                        } else {
                            show_toast("Oops!","Something went wrong","error");
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
