<x-header />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

@if(session()->has('message'))
<div class="alert alert-success">
     {{ session()->get('message') }}
</div>
@endif

<table class="table table-bordered">
     <thead>
          <tr>
               <th>Country id</th>
               <th>Country Name</th>
               <th>Action</th>
          </tr>
     </thead>
     <tbody>
          @if(!empty($countries) && $countries->count())

          @foreach($countries as $country)
          <tr>
               <td> {{$country['country_id']}}</td>
               <td> {{$country['country_name']}}</td>
               <td>
                    <a href="{{"delete/".$country['country_id']}}">Delete</a>
                    <a href="{{"edit/".$country['country_id']}}">Edit</a>
               </td>
          </tr>
          @endforeach
          @else

          <tr>
               <td colspan="10">There are no data.</td>
          </tr>
          @endif
     </tbody>
</table>
{!! $countries->links() !!}