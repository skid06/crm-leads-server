<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{url('/mrilogo.png')}}" class="logo" alt="{{config('app.name')}}" style="width: 20%;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>