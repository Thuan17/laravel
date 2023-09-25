@extends('layouts.app')
@section('content')
<h2>về tôi about</h2>
{{
    $x=10;
}}
 {{-- phai ket thuc bằng endif   --}}
@if($x>1)
    <h3>lon hon</h3>

@endif

 {{-- kiem tra    --}}
    @unless (empty($name))
            <h4> unless :Co ten </h4>
    @endunless

   @if(!empty($name))
   
        <h3>Ten khác rỗng</h3>
   
   @endif
   @empty(!$name)
        <h4>empty : ten khac rỗng</h4>
   @endempty
   @switch($name)
       @case('Thuan')
            <h3>Đay là thuận</h3>
           @break
    
      
       @default
           <h4>Không có tên</h4>
   @endswitch
@endsection