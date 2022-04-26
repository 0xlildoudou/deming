@extends("layout")

@section("content")
<div class="p-3">
    <div data-role="panel" data-title-caption="Résultats de la recherche" data-collapsible="true" data-title-icon="<span class='mif-search'></span>">

		@foreach($results as $result)
		<b>{{ $result['model'] }}</b> :
		{{ $result['clause'] }} :
		<a href="{{ $result['url'] }}">
			@if (array_key_exists("name",$result))
				{{ $result["name"] }}
			@elseif (array_key_exists("title",$result))
				{{ $result["title"] }}
			@endif
		</a>
			@if (array_key_exists("realisation_date",$result))
				- {{ $result["realisation_date"] }}
			@endif			
		<br>
		@endforeach
	</div>
	</div>	
@endsection



