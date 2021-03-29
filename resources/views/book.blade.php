@extends('adminlte::page')

@section('title', 'Pengelolaan Buku')

@section('content_header')
    <h1>Pengelolaan Buku</h1>
@stop

@section('content')
    <div class="container">
        <row class="justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('pengelolaan Buku') }}</div>
                    <div class="card-body">
                        <table id="table-data" class="table table-borderer">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Tahun</th>
                                    <th>Penerbit</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1 @endphp
                            @foreach ($books as $book)
                            <tbody>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $book->judul }}</td>
                                    <td>{{ $book->penulis }}</td>
                                    <td>{{ $book->tahun }}</td>
                                    <td>{{ $book->penerbit }}</td>
                                    <td>
                                        @if ($book->cover !==null)
                                            <img src="{{ asset('storage/cover_book/'.$book->cover) }}" width="100px"/>
                                        @else
                                            [gambar tidak tersedia]
                                        @endif

                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </row>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
