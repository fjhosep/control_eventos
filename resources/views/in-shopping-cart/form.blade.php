<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::hidden('category_id', $category->id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
    </div>
</div>