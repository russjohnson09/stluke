This is a thing

@forelse ($sermons as $s)
	<div>{{$s}}</div>
	@empty
	<p>None</p>
@endforelse