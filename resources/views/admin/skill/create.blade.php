@component('admin.layout.content' , ['title' => 'ساخت مهارت  '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('skill.index')}}">مهارت ها</a> </li>
        <li class="breadcrumb-item"> ساخت مهارت</li>

    @endslot

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">ساخت مهارت </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('skill.store')}}" method="POST">
            <div class="card-body">
                @csrf

                <div class="form-group">
                    <label for="token" class="col-form-label">عنوان :</label>
                    <input type="text" value="{{old('title')}}"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title">
                    @error('name')
                    <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="token" class="col-form-label">درصد :</label>
                    <input type="text" value="{{old('percent')}}"
                           class="form-control @error('percent') is-invalid @enderror"
                           name="percent">
                    @error('percent')
                    <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="token" class="col-form-label">سال کاری :</label>
                    <input type="number" value="{{old('year_work')}}"
                           class="form-control @error('year_work') is-invalid @enderror"
                           name="year_work">
                    @error('year_work')
                    <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="token" class="col-form-label">کد ایکن :</label>
                    <input type="text" value="{{old('icon_code')}}"
                           class="form-control @error('icon_code') is-invalid @enderror"
                           name="icon_code">
                    @error('icon_code')
                    <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="order_number">اساس نمایش :</label>
                    <input type="number" name="order_number" id="order_number" class="form-control @error('order_number') is-invalid @enderror">
                    @error('order_number')
                    <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ثبت</button>
                <a href="{{route('skill.index')}}" class="btn btn-default float-left">لغو</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

@endcomponent


