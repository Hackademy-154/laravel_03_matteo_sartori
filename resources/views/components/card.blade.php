
<div class="card shadow col-3 m-1" style="">
    <div class="card-body">
        <h5 class="card-title"> {{ $name }} {{ $surname }}</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam consectetur quidem corrupti dicta repellat at magnam accusamu</p>
        <div class="text-center">
            <a href="{{ route('detailPage', ['id' => $dataId]) }}" class="btn btn-primary">Dettaglio</a>
        </div>
    </div>
</div>
