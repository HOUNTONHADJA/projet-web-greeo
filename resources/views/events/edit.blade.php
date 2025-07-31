@extends('events.app')

@section('main')

    <div class="">
        <h5 class="p-2" >Modifier un  évènement</h5>
    </div>

    <!-- Checkbox -->
    <div class="form-check form-switch mb-4">
        <input class="form-check-input" type="checkbox" id="isOnline" name="is_online">
        <label class="form-check-label" for="isOnline">Cet évènement se déroule en ligne</label>
    </div>

        <form action="{{ route('events.update', $events) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="modal-body">

                    <!-- Nom de l'évnement -->
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="mb-3">
                            <label for="" class="form-label">Titre de l'évènement</label>
                            <input type="text" name="title" class="form-control"  value="{{ old('title', $events->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Date de l'évnement</label>
                            <input type="datetime-local" name="date_event" class="form-control"  value="{{ old('title', $events->date_event) }}">
                        </div>
                    </div>

                    <!-- Zone physique -->
                    <div id="physicalFields" class="row row-cols-1 row-cols-md-2">
                        <div class="mb-3">
                            <label for="location_name" class="form-label">Lieu de l’évènement</label>
                            <input type="text" class="form-control" id="location_name" name="location_name" value="{{ old('title', $events->location_name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Ville </label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('title', $events->address) }}">
                        </div>
                    </div>

                    <!-- Zone en ligne -->
                    <div id="onlineFields" class="mb-4 d-none">
                        <label for="meeting_link" class="form-label">Lien Zoom ou autre plateforme</label>
                        <input type="url" class="form-control" id="meeting_link" name="meeting_link" value="{{ old('title', $events->meeting_link) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Images</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" >{{ old('title', $events->description) }}</textarea>
                    </div>
                </div>
            <div class="modal-footer">

            <button type="submit" class="btn btn-warning">Modifier</button>
        </form>
    </div>

    <script>
        const isOnlineCheckbox = document.getElementById('isOnline');
        const onlineFields = document.getElementById('onlineFields');
        const physicalFields = document.getElementById('physicalFields');

        isOnlineCheckbox.addEventListener('change', function () {
            if (this.checked) {
                onlineFields.classList.remove('d-none');
                physicalFields.classList.add('d-none');
            } else {
                onlineFields.classList.add('d-none');
                physicalFields.classList.remove('d-none');
            }
        });
    </script>




@endsection