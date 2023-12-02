<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Pelayanan Perizinan</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Judul</label>
            {{ Form::text('judul', null, ['class' => 'form-control ', 'required']) }}
        </div>
        <div class="form-group">
            <label>Isi</label>
            {{ Form::textarea('isi', null, ['id' => 'summernote']) }}
        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\PelayananPerizinanValidation') !!}
@endpush
