@props(['fruit'])

<div>



 {{ $fruit->label }}


 <ul style="list-style-type:square;">

  @foreach ($fruit->children as $child)
  <li>
   <div style="margin-left:20px;">
    <x-fruit-item :fruit="$child" />
   </div>
  </li>
  @endforeach



 </ul>



</div>