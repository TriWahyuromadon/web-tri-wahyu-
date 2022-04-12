@extends('_layout.with-sidebar')

@section('content')
  <h1>Daftar Guru</h1>
  <div class="row g-3">
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-1.jpg" alt="Guru 1" class="img-fluid">
          </div>
          <div class="text-center">Guru 1</div>
          <div class="text-muted small text-center">Guru Pelajaran A</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-2.jpg" alt="Guru 2" class="img-fluid">
          </div>
          <div class="text-center">Guru 2</div>
          <div class="text-muted small text-center">Guru Pelajaran B</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-3.jpg" alt="Guru 3" class="img-fluid">
          </div>
          <div class="text-center">Guru 3</div>
          <div class="text-muted small text-center">Guru Pelajaran C</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-4.jpg" alt="Guru 4" class="img-fluid">
          </div>
          <div class="text-center">Guru 4</div>
          <div class="text-muted small text-center">Guru Pelajaran D</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-5.jpg" alt="Guru 5" class="img-fluid">
          </div>
          <div class="text-center">Guru 5</div>
          <div class="text-muted small text-center">Guru Pelajaran E</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-6.jpg" alt="Guru 6" class="img-fluid">
          </div>
          <div class="text-center">Guru 6</div>
          <div class="text-muted small text-center">Guru Pelajaran f</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-7.jpg" alt="Guru 7" class="img-fluid">
          </div>
          <div class="text-center">Guru 7</div>
          <div class="text-muted small text-center">Guru Pelajaran G</div>
        </div>
      </div>
          <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="http://127.0.0.1:8000/sample-image/guru-8.jpg" alt="Guru 8" class="img-fluid">
          </div>
          <div class="text-center">Guru 8</div>
          <div class="text-muted small text-center">Guru Pelajaran H</div>
        </div>
      </div>
  </div>
@endsection

@push('sidebar')
 <div class="alert alert-primary mt-2 ml-2">News From Galeri</div>
 {{-- galeri --}}
  <div class="col">
   @if ($galeris->count())
   <div class="card h-100">
     <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="{{ route('galeri.index') }}" class="text-white text-decoration-none">{{ $galeris[0]->created_at->diffForHumans()  }}</a></div>
     <img src="{{ asset($galeris[0]->foto) }}" class="card-img-top" alt="...">
     <div class="card-footer">
       <small class="text-center">{{ $galeris[0]->nama }}</small>
     </div>
   </div>
   @endif
 </div> 
 <div class="col">
  @if ($galeris->count())
  <div class="card h-100">
    <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="{{ route('galeri.index') }}" class="text-white text-decoration-none">{{ $galeris[1]->created_at->diffForHumans()  }}</a></div>
    <img src="{{ asset($galeris[1]->foto) }}" class="card-img-top" alt="...">
    <div class="card-footer">
      <small class="text-center">{{ $galeris[1]->nama }}</small>
    </div>
  </div>
  @endif
</div> 
@endpush
