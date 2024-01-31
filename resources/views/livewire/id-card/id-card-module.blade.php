<main>
    <nav class="navbar">
        <div class="container-fluid px-4">
            <a class="navbar-brand text-white">CARD GENERATOR</a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn bg-light-subtle" data-mdb-ripple-init>LOG-OUT</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            @livewire('id-card.id-card-template')

            <div class="col-9 py-4">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-5">
                            <div class="card card-template">
                                @if (!is_null($asignTemplate))
                                <img src="{{$frontImage ? Storage::url($asignTemplate->front_image): Storage::url($asignTemplate->back_image)}}"
                                    alt="card_template" height="500px" class="rounded">
                                @endif
                            </div>
                            <div class="d-flex justify-content-center gap-3 my-3">
                                @if (!is_null($asignTemplate))
                                <img wire:click="activeCardImage('front')"
                                    src="{{Storage::url($asignTemplate->front_image)}}" alt="front_image"
                                    class="{{$frontImage ? 'active-card' : ''}}" role="button" height="80px"
                                    width="80px">

                                <img wire:click="activeCardImage('back')"
                                    src="{{Storage::url($asignTemplate->back_image)}}" alt="back_image" height="80px"
                                    width="80px" role="button" class="{{$frontImage ? '': 'active-card'}}">
                                @endif
                            </div>
                        </div>

                        @livewire('id-card.id-card-preview')
                    </div>
                    <button type="button" class="btn custom-btn text-dark fw-bold w-50 my-5 py-3" data-mdb-ripple-init
                        data-mdb-ripple-color="dark">SUBMIT CARD</button>
                </div>
            </div>
        </div>
    </div>
</main>