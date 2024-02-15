@extends('partials.navbar')
@section('section')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                searchTable();
            });
            $("#searchBy").change(function() {
                searchTable();
            });

            function searchTable() {
                var input, filter, table, tr, td, i, txtValue, searchBy;
                input = $("#searchInput").val().toUpperCase();
                table = $(".table");
                tr = table.find("tr");
                searchBy = $("#searchBy").val();
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0]; // Ganti dengan indeks kolom yang ingin dicari
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (searchBy === "name" && txtValue.toUpperCase().indexOf(input) > -1) {
                            tr[i].style.display = "";
                        } else if (searchBy === "category") {
                            var category = tr[i].getElementsByTagName("td")[
                                1]; // Ganti dengan indeks kolom kategori
                            if (category) {
                                var categoryValue = category.textContent || category.innerText;
                                if (categoryValue.toUpperCase().indexOf(input) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        });
    </script>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0" style="display: flex; justify-content: space-between; align-items: center;">
                    <h6>Daftar Ketersediaan Batik</h6>
                    <div class="d-flex">
                        <select class="form-select me-2" id="searchBy">
                            <option value="name" class="">Nama</option>
                            <option value="category">Kategori</option>
                        </select>
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari...">
                    </div>
                    <a class="btn bg-gradient-primary mt-3 w-12 rtl-only" href="/batik-create">
                        Add Batik Product
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Kategori</th>
                                   
                                    {{-- <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th> --}}
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stok</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $da)
                                    @if ($da->IsDelete == 0)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="data:image/png;base64,{{ base64_encode($da->foto_batik) }}"
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $da->nama_batik }}</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com
                                            </p> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $da->kategori_batik }}</p>
                                                {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                                            </td>
                                            {{-- <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td> --}}
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $da->stok_batik }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
