<div id="wb_element_instance0" class="wb_element">
  <ul class="hmenu">
    @if (!empty($halaman) && $halaman == 'homepage')
    <li class="active"><a href="{{ url('/') }}" >Home</a></li>
    @else
    <li class="active"><a href="{{ url('/') }}" >Home</a></li>
    @endif
    
    @if (!empty($halaman) && $halaman == 'about')
    <li class="active"><a href="{{ url('about') }}" >About</a></li>
    @else
    <li class="active"><a href="{{ url('about') }}" >About</a></li>
    @endif
    <li class="active"><a href="" >Login</a></li>
  </ul>
</div>