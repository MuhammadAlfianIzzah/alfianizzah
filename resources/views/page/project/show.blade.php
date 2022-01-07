<x-dash-layout>
    <x-slot name="title">Project</x-slot>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create Project
    </button>

    <div class="bg-white container py-3 mx-1 mt-2 d-flex justify-content-start row">
        @forelse($project as $p)
            <div class="col-6">
                <div class="card">
                    <img style="max-height: 200px;object-fit: contain;object-position: top"
                        src="{{ asset("storage/$p->picture") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->nama }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <form action="{{ route('delete-project', $p->nama) }}" method="POST">
                            @csrf
                            @method("delete")
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $p->id }}">
                                <i class="fas fa-trash-alt"></i>

                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{ $p->id }}" tabindex="-1"
                                aria-labelledby="delete{{ $p->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            Yakin ingin menghapus?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            kosong
        @endforelse
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create pmony</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @method("POST")
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="teknologi" class="form-label">teknologi</label>
                            <input type="text" class="form-control" id="teknologi" name="teknologi"
                                value="{{ old('teknologi') }}">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">link</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="desc" placeholder="Leave a desc here"
                                    id="floatingTextarea2" style="height: 100px">{{ old('desc') }}</textarea>
                                <label for="floatingTextarea2">Deskripsi</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" class="form-control" id="picture" name="picture">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dash-layout>
