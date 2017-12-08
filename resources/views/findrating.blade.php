@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindRating.css')}}">
@endsection

@section('content')
<!-- Find Rating -->
<section class="container-fluid find-rating">
  <div class="row find-rating-row">
    <div class="col-sm-12 find-rating-colom">
      <h1 class="text-center">Find Rating</h1>
      <p>Berikan rating anda kepada doktor untuk peningkatan kualitas dokter.</p>
      <select class="form-control rating">
        <option selected>Pilih dokter yang akan anda berikan rating</option>
        <option value="">Doctor A</option>
        <option value="">Doctor B</option>
        <option value="">Doctor C</option>
        <option value="">Doctor D</option>
        <option value="">Doctor E</option>
        <option value="">Doctor F</option>
        <option value="">Doctor G</option>
        <option value="">Doctor H</option>
        <option value="">Doctor I</option>
      </select>
      <select class="form-control rating">
        <option selected>Pilih rating untuk dokter yang anda pilih</option>
        <option value="">Bintang 1</option>
        <option value="">Bintang 2</option>
        <option value="">Bintang 3</option>
        <option value="">Bintang 4</option>
        <option value="">Bintang 5</option>
      </select>
      <button type="button" class="btn btn-light float-right">Submit</button>
    </div>
  </div>
</section>
@endsection