<x-header />
<form action="/update" method="POST">
@csrf
<input type="text" name="country_id" value="{{$data['country_id']}}">
<input type="text" name="country_name" value="{{$data['country_name']}}">
<input type="submit" value="update">
</form>