@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<a class="link-effect font-w700"  href="https://threepneducation.com.np/" target="_blank">
    <img src="{{ asset('assets_admin/images/favicon.ico')}}" height="35px" width="35px"> 
    <span class="font-size-xl" style="color: #0172aa"> Three </span> <span class="font-size-xl warning" style="color: #e15d3a;">Pn</span>
</a>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
