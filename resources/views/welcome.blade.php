<h1>la page d'acceuil</h1>

@foreach ($datas as $data)
        <h1> {{ $data['ville'] }}</h1>
@endforeach