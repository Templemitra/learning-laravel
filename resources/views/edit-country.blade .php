<x-header />

<form action="edit/" method="post">
<input type="text" name="country_id" value={{$data['country_id'}}>
<input type="text" name="country_name" value={{$data['country_name']}}>
<input type="submit" name="update" value="update">
</form>