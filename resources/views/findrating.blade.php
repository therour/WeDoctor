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
      <form action="{{ url('/submitrating') }}" method="POST">
        {{ csrf_field() }}
        <select name="doctor_id" class="form-control rating">
          <option selected>Pilih dokter yang akan anda berikan rating</option>
          @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->nama_doctor }}</option>
          @endforeach
        </select>
        <select name="rating_user" class="form-control rating">
          <option selected>Pilih rating untuk dokter yang anda pilih</option>
          <option value="1">Bintang 1</option>
          <option value="2">Bintang 2</option>
          <option value="3">Bintang 3</option>
          <option value="4">Bintang 4</option>
          <option value="5">Bintang 5</option>
        </select>
        <button type="submit" class="btn btn-light float-right">Submit</button>
      </form>
    </div>
  </div>
</section>
@endsection