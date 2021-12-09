view index produk
@extends('layouts.app')
@section('title', 'Contact Message')

@push('page-styles')

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

@endpush

@section('content')

    <div class="section-body">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible show-fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>x</span>
                    </button>
                    {{session('message')}}
                </div>
            </div>
        @endif

        {{-- <div class="card"> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontak as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->message }}</td>
                                <td class="text-center">
                                    <a href="#" data-id="{{ $item->id }}" class="btn btn-sm btn-danger fas fa-trash swal-confirm">
                                        <form action="{{ route('admin.kontak.destroy', $item->id) }}" id="data{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- </div> --}}
    </div>

@endsection

@push('page-scripts')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endpush

@push('after-scripts')

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
      $('#data').DataTable();
  } );
  </script>

<script>
    $(".swal-confirm").click(function(e) {
        id = e.target.dataset.id;
        swal({
            title: "Yakin Ingin Menghapus Data?",
            text: "Data yang sudah terhapus tidak bisa dikembalikan!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                swal("Data berhasil dihapus!", {
                icon: "success",
              });
              $(`#data${id}`).submit();
            } else {
            //   swal("Your imaginary file is safe!");
            }
          });
    });
</script>

@endpush
