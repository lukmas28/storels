@extends('backend/layouts.template')

@section('content')

<!--<main id="main" class="main">-->
<!--<section id="main-content">-->
<main id="main" class="main">
    <div class="pagetitle">
      <h1 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h1>
      <nav>
        <ol class="breadcrumb">
          <li> <i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
          <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
          <li><i class="icon_document_alt"></i>Pengalaman Kerja</li>
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
                    Pengalaman Kerja
                </header>
                <div class="panel-body">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <a href="{{ route('pengalaman_kerja.create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus">Tambah</i></button></a>
                </div>
            </section>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main> <!-- End #main -->
  @endsection