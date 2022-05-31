{{ Form::open(['url' => 'blogs','id' => 'form', 'enctype' => 'multipart/form-data']) }}

<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('name', __('Name'), ['class' => 'form-control-label']) }}
        {{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => __('Enter new Blog name'), 'required'=>'required']) }}
    </div>
    
    <div class="form-group col-md-6">
        {{ Form::label('Category', __('Category'), ['class' => 'form-control-label']) }}
        <select class="form-control p-1" name="category">
            <option value="0">{{__('Erpgram')}}</option>
            <option value="0">{{__('News')}}</option>
            <option value="0">{{__('Economy')}}</option>
            <option value="0">{{__('History')}}</option>
            <option value="0">{{__('Sports')}}</option>
        </select>
    </div>
    
    <div class="form-group col-md-12">
        <div id="toolbar-container"></div>
        <textarea id="blog" name="blog" style="height:300px;border:1px solid #ddd;"></textarea>
    </div>
    
    <div class="mb-4 col-md-6">
        {{ Form::label('upload', __('Upload'), ['class' => 'form-control-label']) }}
        <div class="custom-file">
            {{ Form::file('image', [
                                        'class' => 'custom-file-input d-none',
                                        'accept' => "image/*",
                                        'id' => "product-image",
                                    ]) }}
            {{ Form::label('product-image', __('Choose image'), ['class' => 'custom-file-label1']) }}
        </div>
    </div>
    
    <div class="col-md-6 my-auto mx-auto">
        <div class="form-group" id="product-image">
            <img class="profile-image rounded-circle w-70px-ni h-70px">
            <button type="button" class="btn btn-danger btn-xs mt-2 product-img-btn d-none">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary btn-sm rounded-pill" data-dismiss="modal">{{ __('Cancel') }}</button>
    <input class="btn btn-primary btn-sm rounded-pill" type="submit" value="{{ __('Create') }}">
</div>

{{ Form::close() }}

<script>
    CKEDITOR.replace('blog');
</script>

