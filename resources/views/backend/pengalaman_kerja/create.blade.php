@extends('backend/layouts.template')

@section('content')

<!--<main id="main" class="main">-->
<!--<section id="main-content">-->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Form validation -->
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pengalaman Kerja
                </header>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problem with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" id="pengalaman_kerja_form" method="POST" action="{{ route('pengalaman_kerja.store') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Perusahaan <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama" name="nama" minlength="5" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Jabatan <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="jabatan" name="jabatan" minlength="2" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tahun_masuk" name="tahun_masuk" minlength="4" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tahun_keluar" name="tahun_keluar" minlength="4" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('pengalaman_kerja.index') }}"><button class="btn btn-default">Cancel</button></a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main> <!-- End #main -->
  @endsection
  @push('content-css')
  <link href="{{ asset('backend/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
  @endpush
  @push('content-js')
  <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
    $('#tahun_keluar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
  </script>
  @endpush